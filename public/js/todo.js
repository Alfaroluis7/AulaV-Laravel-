var picker_from = $( '#picker_from' ).pickadate({
    onSelect: function() {
        var fromDate = createDateArray( this.getDate( 'yyyy-mm-dd' ) )
        picker_to.data( 'pickadate' ).setDateLimit( fromDate )
    }
})



// When a date is selected on the "to" picker,
// get the date and split into an array.
// Then set the upper limit of the "from" picker.
var picker_to = $( '#picker_to' ).pickadate({
    onSelect: function() {
        var toDate = createDateArray( this.getDate( 'yyyy-mm-dd' ) )
        picker_from.data( 'pickadate' ).setDateLimit( toDate, 1 )
    }
})


// Create an array from the date while parsing each date unit as an integer
function createDateArray( date ) {
    return date.split( '-' ).map(function( value ) { return +value })
}