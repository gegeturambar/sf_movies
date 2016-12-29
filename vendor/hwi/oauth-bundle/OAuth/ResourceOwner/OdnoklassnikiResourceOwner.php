<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware.Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HWI\Bundle\OAuthBundle\OAuth\ResourceOwner;

use HWI\Bundle\OAuthBundle\Security\Core\Authentication\Token\OAuthToken;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * OdnoklassnikiResourceOwner
 *
 * @author Sergey Polischook <spolischook@gmail.com>
 */
class OdnoklassnikiResourceOwner extends GenericOAuth2ResourceOwner
{
    /**
     * {@inheritDoc}
     */
    protected $paths = array(
        'identifier' => 'uid',
        'nickname'   => 'username',
        'realname'   => 'name',
        'email'      => 'email',
        'firstname'  => 'first_name',
        'lastname'   => 'last_name',
    );

    /**
     * {@inheritDoc}
     */
    public function getUserInformation(array $accessToken, array $extraParameters = array())
    {
        $parameters = array(
            'access_token'    => $accessToken['access_token'],
            'application_key' => $this->options['application_key'],
        );

        if ($this->options['fields']) {
            $parameters['fields'] = $this->options['fields'];
            $parameters['sig'] = md5(sprintf(
                'application_key=%sfields=%smethod=users.getCurrentUser%s',
                $this->options['application_key'],
                $this->options['fields'],
                md5($accessToken['access_token'].$this->options['client_secret'])
            ));
        } else {
            $parameters['sig'] = md5(sprintf(
                'application_key=%smethod=users.getCurrentUser%s',
                $this->options['application_key'],
                md5($accessToken['access_token'].$this->options['client_secret'])
            ));
        }
        $url = $this->normalizeUrl($this->options['infos_url'], $parameters);

        $content = $this->doGetUserInformationRequest($url)->getContent();

        $response = $this->getUserResponse();
        $response->setResponse($content);
        $response->setResourceOwner($this);
        $response->setOAuthToken(new OAuthToken($accessToken));

        return $response;
    }

    /**
     * {@inheritDoc}
     */
    protected function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(array(
            'authorization_url' => 'https://connect.ok.ru/oauth/authorize',
            'access_token_url'  => 'https://api.ok.ru/oauth/token.do',
            'infos_url'         => 'https://api.ok.ru/fb.do?method=users.getCurrentUser',

            'application_key'   => null,
            'fields'            => null,
        ));

        $fieldsNormalizer = function (Options $options, $value) {
            if (!$value) {
                return null;
            }
            return is_array($value) ? implode(',', $value) : $value;
        };

        // Symfony <2.6 BC
        if (method_exists($resolver, 'setNormalizer')) {
            $resolver->setNormalizer('fields', $fieldsNormalizer);
        } else {
            $resolver->setNormalizers(array(
                'fields' => $fieldsNormalizer,
            ));
        }
    }
}