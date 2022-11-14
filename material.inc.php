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

// Goblins!

// Monsters!
$this->monsters = array(
  "pet_frog" => array(
    "card_name" => clienttranslate("Pet Frog"),
    "description" => array(
      clienttranslate("When the Population of this Tribe reaches 4, ignore any further Goblin discs that would be added to it. (<em>This Tribe cannot cause overpopulation.</em>) Also, malaise does not decrease this Tribe's Strength."),
    ),
    "ambush_text" => "",
    "ambush_str" => 2,
    "quote" => clienttranslate("Joinfollow our tribe! We got a mascot!")
  ),
  "ogre" => array(
    "card_name" => clienttranslate("Ogre"),
    "description" => array(
      clienttranslate("This Tribe gets +1 Strength."),
    ),
    "ambush_text" => clienttranslate("You must move to an adjacent, unoccupied non-Dark space. Then, place the Ogre's Monster token on the space which caused the ambush, with this card nearby. You must attack and defeat the Ogre to enter the space."),
    "ambush_str" => 4,
    "quote" => clienttranslate("CRUSHING TIME?")
  ),
  "troll" => array(
    "card_name" => clienttranslate("Troll"),
    "description" => array(
      clienttranslate("This Tribe gets +1 Strength."),
    ),
    "ambush_text" => clienttranslate("Place the Canyon tile if it is not already in play (even if you are not using Terrain tiles), then place the Troll's Monster token on the bridge space, with this card nearby. You must fight and defeat the Troll to cross."),
    "ambush_str" => 4,
    "quote" => clienttranslate("Who's that clank-clanking over my bridge?")
  ),
  "golem" => array(
    "card_name" => clienttranslate("Golem"),
    "description" => array(
      clienttranslate("This Tribe can move through walls."),
    ),
    "ambush_text" => clienttranslate("Place the Golem face-up on your player board. For the rest of the game, each use of the Ancient Map requires 2 Hero cubes instead of 1."),
    "ambush_str" => 3,
    "quote" => clienttranslate("...I... ...O...B...E...Y...")
  ),
  "gnome" => array(
    "card_name" => clienttranslate("Gnome"),
    "description" => array(
      clienttranslate("When this Tribe uses the Reveal action, you may place its piece on a Dark tile with any Tribe's symbol."),
      clienttranslate("After this Tribe plunders a Treasure or Dragon Gem token, you may place its piece on an unoccupied Dark tile with any Tribe's symbol.")
    ),
    "ambush_text" => clienttranslate("Discard a Treasure card at random."),
    "ambush_str" => 3,
    "quote" => clienttranslate("Sneaky is as tricky does, grandpap always used to say!")
  ),
  "wisp" => array(
    "card_name" => clienttranslate("Wisp"),
    "description" => array(
      clienttranslate("While this Tribe is activated but before it takes an action, you may move the Knight up to 3 spaces in any direction. You may only do this if the Knight is visible to the Tribe, and only once per turn."),
    ),
    "ambush_text" => "",
    "ambush_str" => -1,
    "quote" => clienttranslate("...remember me...this way...can you see me...? ...come on, I'll show you...")
  ),
  "bright_beetles" => array(
    "card_name" => clienttranslate("Bright Beetles"),
    "description" => array(
      clienttranslate("When this Tribe scatters, it loses one less Population. When this Tribe would lose Population by other effects, you may discard Bright Beetles to lose one less Population."),
    ),
    "ambush_text" => clienttranslate("Place Bright Beetles face-up near the Monster deck. Add +1 STR to the next Monster drawn, then discard Bright Beetles."),
    "ambush_str" => 3,
    "quote" => clienttranslate("*clk-clk* *skitter*")
  ),
  "underworm" => array(
    "card_name" => clienttranslate("Underworm"),
    "description" => array(
      clienttranslate("When you activate this Tribe, during its movement it can move up to 2 tiles once in one diagonal direction, ignoring all tiles and walls in between."),
    ),
    "ambush_text" => clienttranslate("Move diagonally to the nearest Dark tile (place one if needed) and then reveal the tile as part of the same Encounter."),
    "ambush_str" => 2,
    "quote" => clienttranslate("Walkstep without rhythm, and you won't attractify the worm.")
  ),
  "blob" => array(
    "card_name" => clienttranslate("Blob"),
    "description" => array(
      clienttranslate("If this Tribe uses the Attack action against the Knight, the Knight also loses 5 Grit."),
    ),
    "ambush_text" => clienttranslate("Lose 5 Grit."),
    "ambush_str" => 3,
    "quote" => clienttranslate("Gluuuuurrrgghhh...")
  ),
  "flame_giant" => array(
    "card_name" => clienttranslate("Flame Giant"),
    "description" => array(
      clienttranslate("This Tribe gets +1 Strength."),
    ),
    "ambush_text" => clienttranslate("If your strength is 3 or lower, you lose another Health."),
    "ambush_str" => 4,
    "quote" => clienttranslate("Flee fire, foe fum... I smell the blood of a wandering knight.")
  ),

);
