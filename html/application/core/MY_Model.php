<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
    const DATABASE_PORT = 8095;

    protected function getByCurl(string $url, string $port, string $endPoint): array {
        $ch = curl_init("$url:$port/$endPoint");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json'
        ));
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

        //execute post
        $result = curl_exec($ch);
        var_dump(curl_error($ch));
        //close connection
        curl_close($ch);

        return json_decode($result);
    }

    public function getPaginationHTML(int $page, int $maxPage): string {
        $pages = $this->getPaginationPageHTML(1);

        if ($page > 1) {
            if ($page > 3) {
                $pages .= $this->getPaginationSpaceHTML()
                        . $this->getPaginationPageHTML($page - 1);
            }
            else if ($page === 3) {
                $pages .= $this->getPaginationPageHTML($page - 1);
            }
            
            $pages .= $this->getPaginationPageHTML($page);
        }


        if ($page < $maxPage) {
            $pages .= $this->getPaginationPageHTML($page + 1);
        }

        if ($page < $maxPage - 2) {
            $pages .= $this->getPaginationSpaceHTML();
        }

        if ($page < $maxPage - 1) {
            $pages .= $this->getPaginationPageHTML($maxPage);
        }

        return $pages;
    }

    private function getPaginationSpaceHTML(): string {
        return $this->getPaginationPageHTML('...', false);
    }

    private function getPaginationPageHTML(string $page, bool $linkable = true): string {
        return "
            <div class='col'>
                ". (($linkable) ? "<a href='/{$this->router->class}/$page'>" : "") ."
                
                {$page}
                
                ". (($linkable) ? "</a>" : "") ."
            </div>
        ";
    }
}