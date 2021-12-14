<?php

interface RouteInterface
{
  public function setPath(string $path): void;
  public function getPath(): string;
  
  public function setMethod(string $method): void;
  public function getMethod(): string;

  public function setCallback(callable $callback): void;
  public function getCallback(): callable;
}