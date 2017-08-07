<?php

namespace Xiaozhou\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Xiaozhou\Model\LottoMachine;

class LottoNumberGeneratorCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('lotto:generate')
            ->setDescription('This utility will your lucky numbers.')
            ->addOption('loNumber', 'loNumber', InputOption::VALUE_REQUIRED, '')
            ->addOption('hiNumber', 'hiNumber', InputOption::VALUE_REQUIRED, '')
            ->addOption('initialSpinTime', 'initialSpinTime', InputOption::VALUE_REQUIRED, '')
            ->addOption('spinTime', 'spinTime', InputOption::VALUE_REQUIRED, '');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $loNumber = $input->getOption('loNumber');
        $hiNumber = $input->getOption('hiNumber');
        $initialSpinTime = $input->getOption('initialSpinTime');
        $spinTime = $input->getOption('spinTime');

        if (!isset($loNumber) || !isset($hiNumber) || !isset($initialSpinTime) || !isset($spinTime)) {
            die($this->usageHelp());
        }

        // TODO, use the LottoMachine model to generate the lucky numbers and print them to the console screen
        $lottoNumModule = new LottoMachine($loNumber,$hiNumber,$initialSpinTime,$spinTime);
        $lottoNumModule->initialiseNumRange();

        die(var_export($lottoNumModule->allNums));
    }

    private function usageHelp()
    {
        return <<<USAGE
Usage:  php app.php lotto:generate -- [options]

  --loNumber <int>          - obvious
  --hiNumber <int>               - obvious
  --initialSpinTime <int>    - obvious
  --spinTime <int>    - obvious

  Example; php app.php lotto:generate --loNumber 1 --hiNumber 59 --initialSpinTime 2 --spinTime 1

  help                   This help

USAGE;
    }
}
