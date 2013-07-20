<?php

namespace League\OAuth1\Client\Signature;

use League\OAuth1\Client\Server\ServerInterface;
use League\OAuth1\Client\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;

class PlainTextSignature extends AbstractSignature implements SignatureInterface
{
    /**
     * Sign the given request for the client.
     *
     * @param  Request          $request
     * @param  ServerInterface  $server
     * @param  TokenInterface   $token
     * @return string
     */
    public function sign(Request $request, ServerInterface $server, TokenInterface $token = null)
    {
        return $this->key($server, $token);
    }
}