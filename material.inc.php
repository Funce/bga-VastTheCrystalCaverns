<?php

/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * VastTheCrystalCaverns implementation : © Silvligh / Funce <funce.973@gmail.com>
 * 
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * material.inc.php
 *
 * VastTheCrystalCaverns game material description
 *
 * Here, you can describe the material of your game with PHP variables.
 *   
 * This file is loaded in your game logic class constructor, ie these variables
 * are available everywhere in your game logic code.
 *
 */


/*

Example:

$this->card_types = array(
    1 => array( "card_name" => ...,
                ...
              )
);

*/

$this->tokens = array(
  1 => array(
    "token_name" => "",
    "sprite_sheet" => ""
  )
);

$this->omens = array(
  1 => array(
    "omen_type" => "",
    "sprite_sheet" => ""
  )
);

$this->tiles = array(
  1 => array(
    "dark_type" => "",
    "light_type" => "",
    "sprite_sheet" => ""
  )
);

// Knight!

// Sidequests

$this->sidequests = array(
  "stalwart" => array(
    "card_name" => clienttranslate("Stalwart"),
    "description" => clienttranslate("Attack a Goblin Tribe with a Population of 3 or greater. If there is no Goblin player, resolve 2 ambush tiles or <em>Ambush</em> cards, in any combination, during one turn instead."),
    "quote" => clienttranslate("Come and get it, you little creeps!"),
    "reward" => 5
  ),
  "intrepid" => array(
    "card_name" => clienttranslate("Intrepid"),
    "description" => clienttranslate("Reveal this card when 10 or more Cave tiles have been revealed. <em>Terrain tiles do not count</em>."),
    "quote" => clienttranslate("Heeeere dragon, dragon, dragon..."),
    "reward" => 3
  ),
  "daring" => array(
    "card_name" => clienttranslate("Daring"),
    "description" => clienttranslate("Attack a Goblin Tribe with a Monster, attack the Dragon successfully, or attack and kill the Thief."),
    "quote" => clienttranslate("I didn't come all this way to die in the dark!"),
    "reward" => 4
  ),
  "fearless" => array(
    "card_name" => clienttranslate("Fearless"),
    "description" => clienttranslate("Reveal a Dark tile with a Goblin Tribe on it, then attack the Tribe on the same Encounter. If there is no Goblin player, instead resolve an Ambush tile or <em>Ambush</em> card, attacking a Monster and losing no Health. (<em>You may draw a Monster instead of fighting Normal or Tough Goblins.</em>)"),
    "quote" => clienttranslate("I don't need to see you to strike you down!"),
    "reward" => 4
  ),
  "cunning" => array(
    "card_name" => clienttranslate("Cunning"),
    "description" => clienttranslate("Attempt to collect a Dragon Gem. If there is no Dragon player, collect 2 Treasure tokens during one turn instead."),
    "quote" => clienttranslate("Well, well, what do we have here...?"),
    "reward" => 3
  ),
  "bedecked" => array(
    "card_name" => clienttranslate("Bedecked"),
    "description" => clienttranslate("Reveal this card when you have at least two face-up Treasure cards."),
    "quote" => clienttranslate("You never know which trinket stands between you and a fiery, painful death, I always say."),
    "reward" => 4
  ),
  "adventurous" => array(
    "card_name" => clienttranslate("Adventurous"),
    "description" => clienttranslate("Face 3 Encounters, each on a different space, during one turn."),
    "quote" => clienttranslate("Is that all you've got?"),
    "reward" => 6
  ),
  "swift" => array(
    "card_name" => clienttranslate("Swift"),
    "description" => clienttranslate("Move 7 or more different spaces during one turn."),
    "quote" => clienttranslate("The best defense is a good offense, but when that doesn't work, RUN!"),
    "reward" => 4
  ),
  "eagle_eyed" => array(
    "card_name" => clienttranslate("Eagle-Eyed"),
    "description" => clienttranslate("Shoot another player with the Bow or the Enchanted Bow."),
    "quote" => clienttranslate("Gotcha!"),
    "reward" => 3
  ),
  "persistent" => array(
    "card_name" => clienttranslate("Persistent"),
    "description" => clienttranslate("Reveal this card when 3 Crystal tokens have been smashed."),
    "quote" => clienttranslate("Three down, two to go..."),
    "reward" => 4
  )
);
