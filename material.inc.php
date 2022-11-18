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


/*

  - Card Font Details - 

  Sidequests

  Grit Reward
    Font - DwarvenAxe BB
    Colour - rgb(255,255,255)
    Size - 18

  Title
    Font - DwarvenAxe BB
    Colour - rgb(34, 30, 31)
    Size - 18


  Description
    Font - Noto Serif
    Colour - rgb(255, 255, 255)
    Size - 9
  
  Quote
    Font - Noto Serif
    Colour - rgb(34, 30, 31)
    Size - 6
*/

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

// Treasure!
$this->treasure = array(
  "javelin" => array(
    "card_name" => clienttranslate("Javelin"),
    "description" => array(
      clienttranslate("When used, your next attack may target the Dragon while he is underground without using a Bomb, and you gain +1 Strength on your next attack. Remove the Javelin from the game after resolving its effects. (<em>Doesn't require a Hero cube to use. Cannot be used on the same turn as a Bomb.</em>)."),
    ),
    "quote" => clienttranslate("The favorite weapon of Jodbar the Left-Handed. Believed to be lost forever when Jodbar threw it twelve miles on a dare."),
    "cube_slots" => 0
  ),
  "elvish_sword" => array(
    "card_name" => clienttranslate("Elvish Sword"),
    "description" => array(
      clienttranslate("+1 Perception."),
      clienttranslate("+1 Strength during your turn only."),
    ),
    "quote" => clienttranslate("It appears to be of great antiquity."),
    "cube_slots" => 1
  ),
  "mighty_axe" => array(
    "card_name" => clienttranslate("Mighty Axe"),
    "description" => array(
      clienttranslate("+1 Strength during your turn only."),
      clienttranslate("When attacking the Dragon, you may discard the Hero cube on this card to remove another Health. (<em>Cannot be used with a Bomb. Place the discarded cube on the Discarded Hero Cubes space on your player board.</em>)"),
    ),
    "quote" => clienttranslate("Carved with sigils of great power, and heavy—strangely heavy..."),
    "cube_slots" => 1
  ),
  "potion_kit" => array(
    "card_name" => clienttranslate("Potion Kit"),
    "description" => array(
      clienttranslate("Discard the Hero cube on this card and remove this card from the game to regain 2 Health. (<em>Place the discarded cube on the Discarded Hero Cubes space on your player board.</em>)"),
    ),
    "quote" => clienttranslate("Comes with recipes for healing salve, the Crystal Cavern Cocktail, and lizardnoodle soup."),
    "cube_slots" => 1
  ),
  "heroic_boots" => array(
    "card_name" => clienttranslate("Heroic Boots"),
    "description" => array(
      clienttranslate("+4 Movement."),
    ),
    "quote" => clienttranslate("Calen the Swift wore these. It seems now the mystery of her disappearance is solved..."),
    "cube_slots" => 1
  ),
  "pixie_lantern" => array(
    "card_name" => clienttranslate("Pixie Lantern"),
    "description" => array(
      clienttranslate("+1 Movement."),
      clienttranslate("+1 Perception."),
    ),
    "quote" => clienttranslate("It doesn't seem like a good idea to let them out. You know how pixies are."),
    "cube_slots" => 1
  ),
  "pixie_lantern" => array(
    "card_name" => clienttranslate("Pixie Lantern"),
    "description" => array(
      clienttranslate("+1 Movement."),
      clienttranslate("+1 Perception."),
    ),
    "quote" => clienttranslate("It doesn't seem like a good idea to let them out. You know how pixies are."),
    "cube_slots" => 1
  ),
  "enchanted_bow" => array(
    "card_name" => clienttranslate("Enchanted Bow"),
    "description" => array(
      clienttranslate("Shoot the Dragon or Thief up to 5 tiles away in a straight line, even if underground or if there are walls or Dark tiles between. The Dragon chooses and discards Power cards equal in number to your Strength - 1 (Max: 3). The Thief is killed if your Perception is greater than his Stealth. (<em>May be used before, during, or after movement.</em>)"),
    ),
    "quote" => clienttranslate("Made from the bones of some ancient creature. Oddly warm to the touch."),
    "cube_slots" => 1
  ),
);

// Events!
$this->events = array(
  "ambush" => array(
    "card_name" => clienttranslate("Ambush"),
    "description" => array(
      "",
    ),
    "quote" => array(
      clienttranslate("A quiet crevice, made for lurking."),
      clienttranslate("A dark corner, ideal for creeping."),
      clienttranslate("A large boulder, perfect for skulking."),
      clienttranslate("A shadowy ledge, great for sneaking."),
    ),
    "copies" => 4,
  ),
  "light" => array(
    "card_name" => clienttranslate("Light"),
    "description" => array(
      clienttranslate("The Knight may discard a Hero cube to regain 2 Health. (<em>Place the cube on the Discarded Hero Cubes space on the Knight's player board.</em>)"),
    ),
    "quote" => array(
      clienttranslate("A shaft of sunlight from the world above."),
    ),
    "copies" => 1,
  ),
  "vantage_point" => array(
    "card_name" => clienttranslate("Vantage Point"),
    "description" => array(
      clienttranslate("Reveal all Dark tiles surrounding the Knight. (<em>The revealed tiles are worth Grit as if they had been revealed normally. Place Event tokens on any Event tiles revealed.</em>)"),
    ),
    "quote" => array(
      clienttranslate("A high outcropping with a long, clear view."),
    ),
    "copies" => 1,
  ),
  "fresh_air" => array(
    "card_name" => clienttranslate("Fresh Air"),
    "description" => array(
      clienttranslate("The Knight may spend a Hero cube to regain 1 Health. She regains the cube on her next turn."),
    ),
    "quote" => array(
      clienttranslate("A breeze, smelling of spring air and growing things."),
    ),
    "copies" => 1,
  ),
  "fresh_water" => array(
    "card_name" => clienttranslate("Fresh Water"),
    "description" => array(
      clienttranslate("The Knight may spend a Hero cube to regain 1 Health. She regains the cube on her next turn."),
    ),
    "quote" => array(
      clienttranslate("A clear, splashing stream, cool and pure."),
    ),
    "copies" => 1,
  ),
  "cave_bread" => array(
    "card_name" => clienttranslate("Cave Bread"),
    "description" => array(
      clienttranslate("The Knight regains 1 Hero cube from the Discarded Hero Cubes space on her player board. (<em>If none available, take one from the highest-numbered space on the Grit track.</em>)"),
    ),
    "quote" => array(
      clienttranslate("Some old adventurer's rations, strangely unspoiled and heartening."),
    ),
    "copies" => 1,
  ),
  "rats" => array(
    "card_name" => clienttranslate("Rats"),
    "description" => array(
      clienttranslate("The Knight loses 2 Grit."),
    ),
    "quote" => array(
      clienttranslate("You are bitten by a large and oily rat."),
    ),
    "copies" => 3,
  ),
  "deep_and_dark" => array(
    "card_name" => clienttranslate("Deep and Dark"),
    "description" => array(
      clienttranslate("The Cave draws 2 Omen tokens."),
      clienttranslate("If there is no Cave player, the Knight gains a Treasure card instead.")
    ),
    "quote" => array(
      clienttranslate("A maze of twisty little passages, all alike."),
      clienttranslate("A little maze of twisty passages, all different."),
      clienttranslate("A twisty little maze of passages, all alike."),
    ),
    "copies" => 3,
  ),
);


// Goblins!

// War!
$this->war = array(
  "thirst" => array(
    "card_name" => clienttranslate("Thirst"),
    "fangs" => 3,
    "bones" => 2,
    "eyes" => 1,
    "monsters" => 1,
    "secrets" => 0,
    "rage" => 0,
    "quote" => clienttranslate("We're starvinghungry! When's bellyfull time?"),
  ),
  "spite" => array(
    "card_name" => clienttranslate("Spite"),
    "fangs" => 2,
    "bones" => 1,
    "eyes" => 2,
    "monsters" => 0,
    "secrets" => 1,
    "rage" => 0,
    "quote" => clienttranslate("Let's make some troublefights."),
  ),
  "consumption" => array(
    "card_name" => clienttranslate("Consumption"),
    "fangs" => 1,
    "bones" => 3,
    "eyes" => 2,
    "monsters" => 1,
    "secrets" => 0,
    "rage" => 0,
    "quote" => clienttranslate("Onwardly, to the glorious afternap!"),
  ),
  "desolation" => array(
    "card_name" => clienttranslate("Desolation"),
    "fangs" => 1,
    "bones" => 2,
    "eyes" => 2,
    "monsters" => 1,
    "secrets" => 1,
    "rage" => 0,
    "quote" => clienttranslate("Passawordalong - we're fighthunting fresh knight!"),
  ),
  "waste" => array(
    "card_name" => clienttranslate("Waste"),
    "fangs" => 2,
    "bones" => 1,
    "eyes" => 3,
    "monsters" => 0,
    "secrets" => 1,
    "rage" => 0,
    "quote" => clienttranslate("Here we come, quickish and scarylike."),
  ),
  "ruin" => array(
    "card_name" => clienttranslate("Ruin"),
    "fangs" => 2,
    "bones" => 2,
    "eyes" => 1,
    "monsters" => 1,
    "secrets" => 0,
    "rage" => 0,
    "quote" => clienttranslate("Hurryfast, let's go-go-go huntfighting!"),
  ),
  "hate" => array(
    "card_name" => clienttranslate("Hate"),
    "fangs" => 2,
    "bones" => 2,
    "eyes" => 2,
    "monsters" => 0,
    "secrets" => 0,
    "rage" => 0,
    "quote" => clienttranslate("No, YOU lookalike a leaf-eating elf-face, you elfing ELF-BABY!"),
  ),
  "fear" => array(
    "card_name" => clienttranslate("Fear"),
    "fangs" => 1,
    "bones" => 1,
    "eyes" => 1,
    "monsters" => 1,
    "secrets" => 2,
    "rage" => 0,
    "quote" => clienttranslate("What's that sound? You go tiptoe down the darkscary tunnel and take a look alonewise."),
  ),
  "desperation" => array(
    "card_name" => clienttranslate("Desperation"),
    "fangs" => 0,
    "bones" => 0,
    "eyes" => 0,
    "monsters" => 3,
    "secrets" => 3,
    "rage" => 1,
    "quote" => clienttranslate("These tunnelholes are ours - only crazyfools come here."),
  ),
  "pain" => array(
    "card_name" => clienttranslate("Pain"),
    "fangs" => 1,
    "bones" => 1,
    "eyes" => 1,
    "monsters" => 0,
    "secrets" => 0,
    "rage" => 1,
    "quote" => clienttranslate("Oh, for a bowl of lizard soup like greathalf-step-gobmommy used to make."),
  ),
);

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

// Secrets!
$this->secrets = array(
  "secret_tunnels" => array(
    "card_name" => clienttranslate("Secret Tunnels"),
    "description" => array(
      clienttranslate("During this turn, whenever you activate a revealed Tribe, you may immediately place its piece on any unoccupied Dark tile. If you do so, you cannot move the Tribe by any other effect this turn, but it may still perform its action."),
    ),
    "quote" => clienttranslate("Come-along thisaway, sneakylike.")
  ),
  "cave_in" => array(
    "card_name" => clienttranslate("Cave-In"),
    "description" => array(
      clienttranslate("Collapse a number of tiles up to the Eye Tribe's Population. You cannot collapse tiles containing other players or Crystal tokens."),
    ),
    "quote" => clienttranslate("Whoopsies.")
  ),
  "poison" => array(
    "card_name" => clienttranslate("Poison"),
    "description" => array(
      clienttranslate("When a Tribe uses the Attack action against the Knight, she must also place a Hero cube on the Entrance tile. If the Tribe's Strength was greater than the Knight's by two or more, she places 2 Hero cubes instead. She regains these cubes if she enters the Entrance tile.")
    ),
    "quote" => clienttranslate("It's an oldtimes family recipe.")
  ),
  "leader" => array(
    "card_name" => clienttranslate("Leader"),
    "description" => array(
      clienttranslate("During overpopulation, you may prevent a Tribe from scattering."),
    ),
    "quote" => clienttranslate("Followchase me, my Tribegoblins! I'll lead us to dinnertime and the glorious afternap!")
  ),
  "goblin_ruby" => array(
    "card_name" => clienttranslate("Goblin Ruby"),
    "description" => array(
      clienttranslate("Place this card face-up on the table."),
      clienttranslate("<b>-1 Perception (All Tribes)</b>"),
      clienttranslate("Once per turn, immediately after drawing War, Monster, or Secrets cards, you may discard and redraw one card. Discard <em>Goblin Ruby</em> when any Tribe's Population decreases to 0."),
    ),
    "quote" => clienttranslate("Ain't it the prettyshiniest thing you ever did see?")
  ),
  "blind_fury" => array(
    "card_name" => clienttranslate("Blind Fury"),
    "description" => array(
      clienttranslate("Pick a Tribe. During this turn, it moves through Lit tiles without losing Population."),
    ),
    "quote" => clienttranslate("There's nothing to be fearscared of but light itself!")
  ),
  "fire_bomber" => array(
    "card_name" => clienttranslate("Fire Bomber"),
    "description" => array(
      clienttranslate("Pick a Tribe. During this turn, it gets +2 Strength. If it uses the Attack action during this turn, decrease its Population to 0 after resolving."),
    ),
    "quote" => clienttranslate("I like it when it goes ticktickticktickticktickBOOM.")
  ),
  "hex" => array(
    "card_name" => clienttranslate("Hex"),
    "description" => array(
      clienttranslate("Choose a player to hex. In each effect, <em>X</em> equals the Eye Tribe's Population."),
      clienttranslate("<b>Knight:</b> Lose <em>X</em> Grit."),
      clienttranslate("<b>Dragon:</b> Discard <em>X</em> Power cards (<em>Dragon chooses</em>)."),
      clienttranslate("<b>Cave</b>: Discard <em>X</em> Omen tokens (<em>Cave chooses</em>)."),
      clienttranslate("<b>Thief:</b> Decrease Stealth by <em>X</em> until the Goblins' next turn."),
    ),
    "quote" => clienttranslate("Boil, boil and… yeah just keep boiling.")
  ),
  "trap" => array(
    "card_name" => clienttranslate("Trap"),
    "description" => array(
      clienttranslate("Place this card face-up on the table."),
      clienttranslate("When any Tribe is attacked, it gets +1 Strength and +1 Perception until the attack resolves, then discard this card. When any Tribe is targeted by a Dragon power, you may discard this card to ignore that power."),
    ),
    "quote" => clienttranslate("Oh NO, the bigscary KNIGHT is coming! What are we poorwiddle helpless Gobbies gonna doooo?")
  ),
  "hiding_spots" => array(
    "card_name" => clienttranslate("Hiding Spots"),
    "description" => array(
      clienttranslate("A hidden Tribe may use the Attack action against the Knight if she is on or adjacent to an Ambush tile. During this action, do not apply any effects from Monster cards or other Secrets cards."),
    ),
    "quote" => clienttranslate("Hushquiet! Time for some creepery.")
  ),
);


// Dragon!

// Powers
$this->powers = array(
  "claw" => array(
    "card_name" => clienttranslate("Claw"),
    "quote" => array(
      clienttranslate("Krraaaaarrrrr!!"),
      clienttranslate("Rrraaagghhh!!"),
      clienttranslate("Hooaaaarrrrggghhhh!!"),
      clienttranslate("Mmmrrrrrrggggghh!!"),
      clienttranslate("Rrrraaaaoooaaooowwwwrrrr!!"),
      clienttranslate("WwrrRRAaarrrraarrrraar!!"),
    ),
    "copies" => 6,
  ),
  "flame" => array(
    "card_name" => clienttranslate("Flame"),
    "quote" => array(
      clienttranslate("HissssSSSssSSsss..."),
      clienttranslate("Ssshshsaasasss..."),
      clienttranslate("Sssrrreeeesssskk..."),
      clienttranslate("Ssshhhrraaaaaggggghh..."),
      clienttranslate("Khrrraaarrgghhh..."),
      clienttranslate("Shhhhsssshhshsssss..."),
    ),
    "copies" => 6,
  ),
  "wing" => array(
    "card_name" => clienttranslate("Wing"),
    "quote" => array(
      clienttranslate("Kraka-KA!!"),
      clienttranslate("MmmrroOOWK!!"),
      clienttranslate("GrreeeooOOOORRRGH!!"),
      clienttranslate("A-a-a-a-a-aARK!"),
      clienttranslate("Keeeaaa!!"),
      clienttranslate("GRA-gra-GRAKK!!"),
    ),
    "copies" => 6,
  ),
);
