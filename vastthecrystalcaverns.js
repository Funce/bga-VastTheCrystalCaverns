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

			this.sidequests = new ebg.stock()
			this.sidequests.setSelectionMode(0)
			this.sidequests.item_margin = 5
			this.sidequests.automargin = true
			this.sidequests.image_items_per_row = 5
			this.sidequests.create(this, $("sidequests"), 330, 460)
			this.sidequests.onItemCreate = dojo.hitch(this, "setupSidequest")
			for (var sidequestCardId in gamedatas.sidequests) {
				var sidequest = gamedatas.sidequests[sidequestCardId]
				var sidequestType = sidequest.type
				if (gamedatas.sidequest_cards.hasOwnProperty(sidequestType)) {
					var sidequestCard = gamedatas.sidequest_cards[sidequestType]

					this.sidequests.addItemType(
						sidequestCardId,
						0,
						g_gamethemeurl + "img/sidequests.png",
						sidequestCard.sprite
					)
					this.sidequests.addToStockWithId(
						sidequestCardId,
						sidequestType
					)
				}
			}

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

		setupSidequest: function (card_div, card_type_id, card_id) {
			dojo.addClass(card_div, "sidequest")
			this.createSideQuestContent(card_div, card_id.split("_")[2])
			// Set up tooltip sometime lmao
		},

		createSideQuestContent: function (card_div, card_key) {
			console.log(card_key)
			var sidequestCard = this.gamedatas.sidequest_cards[card_key]
			console.log(sidequestCard)
			dojo.create(
				"h3",
				{ innerHTML: _(sidequestCard.card_name) },
				card_div
			)

			var tmpobj = {
				innerHTML: bga_format(_(sidequestCard.description), {
					"/": "italic",
				}),
				class: "description",
			}
			dojo.create("p", tmpobj, card_div)

			var tmpobj = {
				innerHTML: '"' + _(sidequestCard.quote) + '"',
				class: "quote",
			}
			dojo.create("p", tmpobj, card_div)

			var tmpobj = {
				innerHTML: _(sidequestCard.reward),
				class: "grit_reward",
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
