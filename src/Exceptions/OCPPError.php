<?php

abstract class OCPPError extends Exception
{
    protected $code = "OCPPError";

    protected $defaultDescription = "";

    public function __construct(
        string $message = "",
        string $code = "",
        ?\Throwable $previous = null
    ) {
        if (empty($message)) {
            $message = $this->defaultDescription;
        }
        if (empty($code)) {
            $code = $this->code;
        }
        if ($previous != null) {
            $message = $message . " - " . $previous->getMessage();
        }
        parent::__construct($message, $code, $previous);
    }
}
