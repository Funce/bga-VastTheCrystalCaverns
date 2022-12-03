/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * VastTheCrystalCaverns implementation : © Silvligh / Funce <funce.973@gmail.com>
 *
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * vastthecrystalcaverns.js
 *
 * VastTheCrystalCaverns user interface script
 *
 * In this file, you are describing the logic of your user interface, in Javascript language.
 *
 */

define([
	"dojo",
	"dojo/_base/declare",
	"ebg/core/gamegui",
	"ebg/counter",
	"ebg/stock",
], function (dojo, declare) {
	return declare("bgagame.vastthecrystalcaverns", ebg.core.gamegui, {
		constructor: function () {
			console.log("vastthecrystalcaverns constructor")

			// Here, you can init the global variables of your user interface
			// Example:
			// this.myGlobalValue = 0;
		},

		/*
            setup:
            
            This method must set up the game user interface according to current game situation specified
            in parameters.
            
            The method is called each time the game interface is displayed to a player, ie:
            _ when the game starts
            _ when a player refreshes the game page (F5)
            
            "gamedatas" argument contains all datas retrieved by your "getAllDatas" PHP method.
        */

		setup: function (gamedatas) {
			console.log("Starting game setup")

			// Setting up player boards
			for (var player_id in gamedatas.players) {
				var player = gamedatas.players[player_id]

				// TODO: Setting up players boards if needed
			}

			// TODO: Set up your game interface here, according to "gamedatas"
			// Lets get the sidequests showing up!

			this.buildStocks()

			// Setup game notifications to handle (see "setupNotifications" method below)
			this.setupNotifications()

			console.log("Ending game setup")
		},

		///////////////////////////////////////////////////
		//// Game & client states

		// onEnteringState: this method is called each time we are entering into a new game state.
		//                  You can use this method to perform some user interface changes at this moment.
		//
		onEnteringState: function (stateName, args) {
			console.log("Entering state: " + stateName)

			switch (stateName) {
				/* Example:
            
            case 'myGameState':
            
                // Show some HTML block at this game state
                dojo.style( 'my_html_block_id', 'display', 'block' );
                
                break;
           */

				case "dummmy":
					break
			}
		},

		// onLeavingState: this method is called each time we are leaving a game state.
		//                 You can use this method to perform some user interface changes at this moment.
		//
		onLeavingState: function (stateName) {
			console.log("Leaving state: " + stateName)

			switch (stateName) {
				/* Example:
            
            case 'myGameState':
            
                // Hide the HTML block we are displaying only during this game state
                dojo.style( 'my_html_block_id', 'display', 'none' );
                
                break;
           */

				case "dummmy":
					break
			}
		},

		// onUpdateActionButtons: in this method you can manage "action buttons" that are displayed in the
		//                        action status bar (ie: the HTML links in the status bar).
		//
		onUpdateActionButtons: function (stateName, args) {
			console.log("onUpdateActionButtons: " + stateName)

			if (this.isCurrentPlayerActive()) {
				switch (
					stateName
					/*               
                 Example:
 
                 case 'myGameState':
                    
                    // Add 3 action buttons in the action status bar:
                    
                    this.addActionButton( 'button_1_id', _('Button 1 label'), 'onMyMethodToCall1' ); 
                    this.addActionButton( 'button_2_id', _('Button 2 label'), 'onMyMethodToCall2' ); 
                    this.addActionButton( 'button_3_id', _('Button 3 label'), 'onMyMethodToCall3' ); 
                    break;
*/
				) {
				}
			}
		},

		///////////////////////////////////////////////////
		//// Utility methods

		/*
        
            Here, you can defines some utility methods that you can use everywhere in your javascript
            script.
        
        */

		buildStocks: function () {
			this.buildSidequestStock()
			this.buildTreasureStock()
			this.buildEventStock()
			this.buildMonsterStock()
			this.buildSecretStock()
			this.buildPowerStock()
		},

		buildSidequestStock: function () {
			var gamedatas = this.gamedatas
			this.sidequests = new ebg.stock()
			this.sidequests.setSelectionMode(0)
			this.sidequests.item_margin = 5
			this.sidequests.automargin = true
			this.sidequests.image_items_per_row = 7
			this.sidequests.create(this, $("sidequests"), 260, 360)
			this.sidequests.onItemCreate = dojo.hitch(
				this,
				"setupSidequestCard"
			)
			for (var sidequestCardId in gamedatas.sidequests) {
				var sidequest = gamedatas.sidequests[sidequestCardId]
				var sidequestType = sidequest.type
				if (gamedatas.sidequest_cards.hasOwnProperty(sidequestType)) {
					var sidequestCard = gamedatas.sidequest_cards[sidequestType]

					this.sidequests.addItemType(
						sidequestCardId,
						0,
						g_gamethemeurl + "img/knight_cards.png",
						sidequestCard.sprite
					)
					this.sidequests.addToStockWithId(
						sidequestCardId,
						sidequestCardId
					)
				}
			}
		},

		setupSidequestCard: function (card_div, card_type_id, card_id) {
			dojo.addClass(card_div, "card")
			dojo.addClass(card_div, "sidequest")
			this.createSideQuestContent(card_div, card_type_id)
			// Set up tooltip sometime lmao
		},

		createSideQuestContent: function (card_div, card_type_id) {
			var sidequestCard = this.gamedatas.sidequests[card_type_id]
			var sidequestInfo =
				this.gamedatas.sidequest_cards[sidequestCard.type]
			dojo.create(
				"h3",
				{ innerHTML: _(sidequestInfo.card_name) },
				card_div
			)

			var tmpobj = {
				innerHTML: bga_format(_(sidequestInfo.description), {
					"/": "italic",
					"*": "bold",
				}),
				class: "description",
			}
			dojo.create("p", tmpobj, card_div)

			var tmpobj = {
				innerHTML: '"' + _(sidequestInfo.quote) + '"',
				class: "quote",
			}
			dojo.create("p", tmpobj, card_div)

			var tmpobj = {
				innerHTML: _(sidequestInfo.reward),
				class: "grit_reward",
			}
			dojo.create("p", tmpobj, card_div)
		},

		buildTreasureStock: function () {
			var gamedatas = this.gamedatas
			this.treasures = new ebg.stock()
			this.treasures.setSelectionMode(0)
			this.treasures.item_margin = 5
			this.treasures.automargin = true
			this.treasures.image_items_per_row = 7
			this.treasures.create(this, $("treasures"), 260, 360)
			this.treasures.onItemCreate = dojo.hitch(this, "setupTreasureCard")
			for (var treasureCardId in gamedatas.treasures) {
				var treasure = gamedatas.treasures[treasureCardId]
				var treasureType = treasure.type
				if (gamedatas.treasure_cards.hasOwnProperty(treasureType)) {
					var treasureCard = gamedatas.treasure_cards[treasureType]

					this.treasures.addItemType(
						treasureCardId,
						0,
						g_gamethemeurl + "img/knight_cards.png",
						treasureCard.sprite
					)
					this.treasures.addToStockWithId(
						treasureCardId,
						treasureCardId
					)
				}
			}
		},

		setupTreasureCard: function (card_div, card_type_id, card_id) {
			console.log("Type: " + card_type_id)
			console.log("id: " + card_id)
			dojo.addClass(card_div, "card")
			dojo.addClass(card_div, "treasure_card")
			this.createTreasureContent(card_div, card_type_id)
			// Set up tooltip sometime lmao
		},

		createTreasureContent: function (card_div, card_type_id) {
			var treasureCard = this.gamedatas.treasures[card_type_id]
			var treasureInfo = this.gamedatas.treasure_cards[treasureCard.type]
			dojo.create(
				"h3",
				{ innerHTML: _(treasureInfo.card_name) },
				card_div
			)

			var tmpobj = {
				class: "description",
			}
			var desc_holder = dojo.create("div", tmpobj, card_div)

			for (const desc of treasureInfo.description) {
				var tmpobj = {
					innerHTML: bga_format(_(desc), {
						"/": "italic",
						"*": "bold",
					}),
					class: "",
				}
				dojo.create("p", tmpobj, desc_holder)
			}

			var tmpobj = {
				innerHTML: '"' + _(treasureInfo.quote) + '"',
				class: "quote",
			}
			dojo.create("p", tmpobj, card_div)
		},

		buildEventStock: function () {
			var gamedatas = this.gamedatas
			this.events = new ebg.stock()
			this.events.setSelectionMode(0)
			this.events.item_margin = 5
			this.events.automargin = true
			this.events.image_items_per_row = 7
			this.events.create(this, $("events"), 260, 360)
			this.events.onItemCreate = dojo.hitch(this, "setupEventCard")
			for (var eventCardId in gamedatas.events) {
				var event = gamedatas.events[eventCardId]
				var eventType = event.type
				if (gamedatas.event_cards.hasOwnProperty(eventType)) {
					var eventCard = gamedatas.event_cards[eventType]

					this.events.addItemType(
						eventCardId,
						0,
						g_gamethemeurl + "img/knight_cards.png",
						eventCard.sprite
					)
					this.events.addToStockWithId(eventCardId, eventCardId)
				}
			}
		},

		setupEventCard: function (card_div, card_type_id, card_id) {
			console.log("Type: " + card_type_id)
			console.log("id: " + card_id)
			dojo.addClass(card_div, "card")
			dojo.addClass(card_div, "event_card")
			this.createEventContent(card_div, card_type_id)
			// Set up tooltip sometime lmao
		},

		createEventContent: function (card_div, card_type_id) {
			var eventCard = this.gamedatas.events[card_type_id]
			var eventInfo = this.gamedatas.event_cards[eventCard.type]
			dojo.create("h3", { innerHTML: _(eventInfo.card_name) }, card_div)

			var tmpobj = {
				class: "description",
			}
			var desc_holder = dojo.create("div", tmpobj, card_div)

			for (const desc of eventInfo.description) {
				var tmpobj = {
					innerHTML: bga_format(_(desc), {
						"/": "italic",
						"*": "bold",
					}),
					class: "",
				}
				dojo.create("p", tmpobj, desc_holder)
			}

			var tmpobj = {
				innerHTML: '"' + _(eventInfo.quote[eventCard.type_arg]) + '"',
				class: "quote",
			}
			dojo.create("p", tmpobj, card_div)
		},

		// War cards (coming soon)

		// Monsters
		buildMonsterStock: function () {
			var gamedatas = this.gamedatas
			this.monsters = new ebg.stock()
			this.monsters.setSelectionMode(0)
			this.monsters.item_margin = 5
			this.monsters.automargin = true
			this.monsters.image_items_per_row = 6
			this.monsters.create(this, $("monsters"), 260, 360)
			this.monsters.onItemCreate = dojo.hitch(this, "setupMonsterCard")
			for (var monsterCardId in gamedatas.monsters) {
				var monster = gamedatas.monsters[monsterCardId]
				var monsterType = monster.type
				if (gamedatas.monster_cards.hasOwnProperty(monsterType)) {
					var monsterCard = gamedatas.monster_cards[monsterType]

					this.monsters.addItemType(
						monsterCardId,
						0,
						g_gamethemeurl + "img/goblin_cards.png",
						monsterCard.sprite
					)
					this.monsters.addToStockWithId(monsterCardId, monsterCardId)
				}
			}
		},

		setupMonsterCard: function (card_div, card_type_id, card_id) {
			console.log("Type: " + card_type_id)
			console.log("id: " + card_id)
			dojo.addClass(card_div, "card")
			dojo.addClass(card_div, "monster_card")
			this.createMonsterContent(card_div, card_type_id)
			// Set up tooltip sometime lmao
		},

		createMonsterContent: function (card_div, card_type_id) {
			var monsterCard = this.gamedatas.monsters[card_type_id]
			var monsterInfo = this.gamedatas.monster_cards[monsterCard.type]
			dojo.create("h3", { innerHTML: _(monsterInfo.card_name) }, card_div)

			var tmpobj = {
				class: "description",
			}
			var desc_holder = dojo.create("div", tmpobj, card_div)

			for (const desc of monsterInfo.description) {
				var tmpobj = {
					innerHTML: bga_format(_(desc), {
						"/": "italic",
						"*": "bold",
					}),
					class: "",
				}
				dojo.create("p", tmpobj, desc_holder)
			}

			var tmpobj = {
				innerHTML: '"' + _(monsterInfo.quote) + '"',
				class: "quote",
			}
			dojo.create("p", tmpobj, card_div)
		},

		// Secrets
		buildSecretStock: function () {
			var gamedatas = this.gamedatas
			this.secrets = new ebg.stock()
			this.secrets.setSelectionMode(0)
			this.secrets.item_margin = 5
			this.secrets.automargin = true
			this.secrets.image_items_per_row = 6
			this.secrets.create(this, $("secrets"), 260, 360)
			this.secrets.onItemCreate = dojo.hitch(this, "setupSecretCard")
			for (var secretCardId in gamedatas.secrets) {
				var secret = gamedatas.secrets[secretCardId]
				var secretType = secret.type
				if (gamedatas.secret_cards.hasOwnProperty(secretType)) {
					var secretCard = gamedatas.secret_cards[secretType]

					this.secrets.addItemType(
						secretCardId,
						0,
						g_gamethemeurl + "img/goblin_cards.png",
						secretCard.sprite
					)
					this.secrets.addToStockWithId(secretCardId, secretCardId)
				}
			}
		},

		setupSecretCard: function (card_div, card_type_id, card_id) {
			console.log("Type: " + card_type_id)
			console.log("id: " + card_id)
			dojo.addClass(card_div, "card")
			dojo.addClass(card_div, "secret_card")
			this.createSecretContent(card_div, card_type_id)
			// Set up tooltip sometime lmao
		},

		createSecretContent: function (card_div, card_type_id) {
			var secretCard = this.gamedatas.secrets[card_type_id]
			var secretInfo = this.gamedatas.secret_cards[secretCard.type]
			dojo.create("h3", { innerHTML: _(secretInfo.card_name) }, card_div)

			var tmpobj = {
				class: "description",
			}
			var desc_holder = dojo.create("div", tmpobj, card_div)

			for (const desc of secretInfo.description) {
				var tmpobj = {
					innerHTML: bga_format(_(desc), {
						"/": "italic",
						"*": "bold",
					}),
					class: "",
				}
				dojo.create("p", tmpobj, desc_holder)
			}

			var tmpobj = {
				innerHTML: '"' + _(secretInfo.quote) + '"',
				class: "quote",
			}
			dojo.create("p", tmpobj, card_div)
		},

		// Powers
		buildPowerStock: function () {
			var gamedatas = this.gamedatas
			this.powers = new ebg.stock()
			this.powers.setSelectionMode(0)
			this.powers.item_margin = 5
			this.powers.automargin = true
			this.powers.image_items_per_row = 3
			this.powers.create(this, $("powers"), 260, 360)
			this.powers.onItemCreate = dojo.hitch(this, "setupPowerCard")
			for (var powerCardId in gamedatas.powers) {
				var power = gamedatas.powers[powerCardId]
				var powerType = power.type
				if (gamedatas.power_cards.hasOwnProperty(powerType)) {
					var powerCard = gamedatas.power_cards[powerType]

					this.powers.addItemType(
						powerCardId,
						0,
						g_gamethemeurl + "img/dragon_cards.png",
						powerCard.sprite
					)
					this.powers.addToStockWithId(powerCardId, powerCardId)
				}
			}
		},

		setupPowerCard: function (card_div, card_type_id, card_id) {
			console.log("Type: " + card_type_id)
			console.log("id: " + card_id)
			dojo.addClass(card_div, "card")
			dojo.addClass(card_div, "power_card")
			this.createPowerContent(card_div, card_type_id)
			// Set up tooltip sometime lmao
		},

		createPowerContent: function (card_div, card_type_id) {
			var powerCard = this.gamedatas.powers[card_type_id]
			var powerInfo = this.gamedatas.power_cards[powerCard.type]
			dojo.create("h3", { innerHTML: _(powerInfo.card_name) }, card_div)

			var tmpobj = {
				innerHTML: '"' + _(powerInfo.quote[powerCard.type_arg]) + '"',
				class: "quote",
			}
			dojo.create("p", tmpobj, card_div)
		},

		///////////////////////////////////////////////////
		//// Player's action

		/*
        
            Here, you are defining methods to handle player's action (ex: results of mouse click on 
            game objects).
            
            Most of the time, these methods:
            _ check the action is possible at this game state.
            _ make a call to the game server
        
        */

		/* Example:
        
        onMyMethodToCall1: function( evt )
        {
            console.log( 'onMyMethodToCall1' );
            
            // Preventing default browser reaction
            dojo.stopEvent( evt );

            // Check that this action is possible (see "possibleactions" in states.inc.php)
            if( ! this.checkAction( 'myAction' ) )
            {   return; }

            this.ajaxcall( "/vastthecrystalcaverns/vastthecrystalcaverns/myAction.html", { 
                                                                    lock: true, 
                                                                    myArgument1: arg1, 
                                                                    myArgument2: arg2,
                                                                    ...
                                                                 }, 
                         this, function( result ) {
                            
                            // What to do after the server call if it succeeded
                            // (most of the time: nothing)
                            
                         }, function( is_error) {

                            // What to do after the server call in anyway (success or failure)
                            // (most of the time: nothing)

                         } );        
        },        
        
        */

		///////////////////////////////////////////////////
		//// Reaction to cometD notifications

		/*
            setupNotifications:
            
            In this method, you associate each of your game notifications with your local method to handle it.
            
            Note: game notification names correspond to "notifyAllPlayers" and "notifyPlayer" calls in
                  your vastthecrystalcaverns.game.php file.
        
        */
		setupNotifications: function () {
			console.log("notifications subscriptions setup")

			// TODO: here, associate your game notifications with local methods

			// Example 1: standard notification handling
			// dojo.subscribe( 'cardPlayed', this, "notif_cardPlayed" );

			// Example 2: standard notification handling + tell the user interface to wait
			//            during 3 seconds after calling the method in order to let the players
			//            see what is happening in the game.
			// dojo.subscribe( 'cardPlayed', this, "notif_cardPlayed" );
			// this.notifqueue.setSynchronous( 'cardPlayed', 3000 );
			//
		},

		// TODO: from this point and below, you can write your game notifications handling methods

		/*
        Example:
        
        notif_cardPlayed: function( notif )
        {
            console.log( 'notif_cardPlayed' );
            console.log( notif );
            
            // Note: notif.args contains the arguments specified during you "notifyAllPlayers" / "notifyPlayer" PHP call
            
            // TODO: play the card in the user interface.
        },    
        
        */
	})
})
