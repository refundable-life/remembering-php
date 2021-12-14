<?php

include(__DIR__."/Interfaces/RouteInterface.php");

class Route implements RouteInterface {
  public string $method = 'get';
  public string $path = '/';
  public $callback = null;

  public function __construct(string $method, string $path, callable $callback) {
    $this->setMethod($method);
    $this->setPath($path);
    $this->setCallback($callback);
  }

  public function setMethod(string $method): void {
    $this->method = $method;
  }

  public function getMethod(): string {
    return $this->method;
  }

  public function setPath(string $path): void {
    $this->path = $path;
  }

  public function getPath(): string {
    return $this->path;
  }

  public function setCallback(callable $callback): void {
    $this->callback = $callback;
  }

  public function getCallback(): callable {
    return $this->callback;
  }
}