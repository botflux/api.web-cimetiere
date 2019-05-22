<?php

namespace App\Serializer;

use ApiPlatform\Core\Serializer\SerializerContextBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

final class UserContextBuilder implements SerializerContextBuilderInterface 
{
    private $decorated;
    private $authorizationChecker;

    public function __construct (SerializerContextBuilderInterface $decorated, AuthorizationCheckerInterface $authorzationChecker)
    {
        $this->decorated = $decorated;
        $this->authorizationChecker = $authorzationChecker;
    }

    public function createFromRequest (Request $request, bool $normalization, ?array $extractedAttributes = null): array
    {
        $context = $this->decorated->createFromRequest ($request, $normalization, $extractedAttributes);

        if ($this->authorizationChecker->isGranted('ROLE_USER')) {
            $context['groups'][] = $normalization ? 'user:read' : 'user:write';
        } else {
            $context['groups'][] = 'anon:read';
        }

        return $context;
    }
}