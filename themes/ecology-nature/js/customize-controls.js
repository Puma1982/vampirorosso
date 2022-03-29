( function( api ) {

	// Extends our custom "ecology-nature" section.
	api.sectionConstructor['ecology-nature'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );