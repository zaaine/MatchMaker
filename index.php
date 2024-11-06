<?php


declare(strict_types=1);

spl_autoload_register(static function (string $fqcn): void {
    $path = sprintf('%s.php', str_replace(['App', '\\'], ['src', '/'], $fqcn));
    require_once $path;
});

use App\MatchMaker\Lobby;
use App\MatchMaker\Player\Player;

$greg = new Player('greg');
$jade = new Player('jade');

$lobby = new Lobby();
$lobby->addPlayers($greg, $jade);

var_dump($lobby->findOponents($lobby->queuingPlayers[0]));

exit(0);
