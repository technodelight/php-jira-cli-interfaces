<?php

namespace Technodelight\Jira\Renderer\Action;

interface Result
{
    public function phrase(): string;

    public function data(): array;
}
