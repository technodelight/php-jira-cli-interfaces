<?php

namespace Technodelight\Jira\Renderer;

use Symfony\Component\Console\Output\OutputInterface;

interface DashboardRenderer
{
    public function render(OutputInterface $output, Collection $collection): void;
}