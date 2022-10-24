<?php

namespace App\Core;

class ViewRenderer
{
    private string $viewsPath;

    public function __construct(string $viewsPath)
    {
        $this->viewsPath = $viewsPath;
    }

    public function render(string $path, array $data = []): string
    {
        $templatePath = $this->viewsPath.'/'.$path.'.php';

        if (file_exists($templatePath)) {
            extract($data);

            ob_start();

            include $templatePath;

            $content = ob_get_contents();
            ob_end_clean();

            return $content;
        } else throw new \RuntimeException('The template "'.$path.'" was not found.');
    }
}
