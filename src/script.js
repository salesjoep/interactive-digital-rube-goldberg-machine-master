// Initialize Firebase
var config = {
	apiKey: "AIzaSyBVzTcyAuEIi3XqHJfJ_Fu543lnqytDK9M",
	authDomain: "welgeen003.firebaseapp.com",
	databaseURL: "https://welgeen003.firebaseio.com",
	projectId: "welgeen003",
	storageBucket: "welgeen003.appspot.com",
	messagingSenderId: "1056729225262"
};
firebase.initializeApp(config);
 
// Every time the firebase.database is Changed!
firebase.database().ref('/chain/').on('value', databaseCHANGED );

function databaseCHANGED(e) {
	var nr = (e.val() && e.val().active_section) || 'Anonymous';
	if(nr == section ){
		start();
	}
	if(nr == "reload" ){
		location.reload();
	}
}

function call_to_next_section(section){
	// Set firebase.database!
	firebase.database().ref('/chain/').set( {active_section: section} );
}

function reset_sections(){
	// Set firebase.database!
	firebase.database().ref('/chain/').set( {active_section: 0} );
}

reset_sections();

		
