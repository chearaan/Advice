<?php

namespace Chearaan\Advice;

use Chearaan\Advice\Storage\Session;

class Advicer
{
    /**
     * Session storage.
     *
     * @var Chearaan\Storage\Session
     */
    protected $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * Flash a message.
     *
     * @param  string $message
     * @param  string $type
     * @param  array  $options
     *
     * @return void
     */
    public function flash($message, $type = null, array $options = [])
    {
        $this->session->flash([
            'advice.message' => $message,
            'advice.type' => $type,
            'advice.options' => json_encode($options),
        ]);
    }

    /**
     * If a message is ready to be shown.
     *
     * @return bool
     */
    public function ready()
    {
        return $this->message();
    }

    /**
     * Get the stored message.
     *
     * @return string
     */
    public function message()
    {
        return $this->session->get('advice.message');
    }

    /**
     * Get the stored type.
     *
     * @return string
     */
    public function type()
    {
        return $this->session->get('advice.type');
    }

    /**
     * Get an additional stored options.
     *
     * @param  boolean $array
     * @return mixed
     */
    public function options($array = false)
    {
        return json_decode($this->session->get('advice.options'), $array);
    }

    /**
     * Get a stored option.
     *
     * @param  string $key
     * @return string
     */
    public function option($key, $default = null)
    {
        return array_get($this->options(true), $key, $default);
    }
}
