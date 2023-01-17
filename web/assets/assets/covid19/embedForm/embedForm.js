// setup an "add a address" link
var $addItemLink = $('<a href="#" class="glyphicon glyphicon-plus green fa-3x"></a>');
var $newItemLinkLi = $('<li></li>').append($addItemLink);

//######################################################################
jQuery(document).ready(function () {
    // Get the ul that holds the collection of addresses
    var $collectionHolder = $('ul.items');

    // add a delete link to all of the existing tag form li elements
    $collectionHolder.find('li').each(function () {
        addFormDeleteLink($(this));
    });

    // add the "add a address" anchor and li to the addresses ul
    $collectionHolder.append($newItemLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $addItemLink.on('click', function (e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // add a new address form (see code block below)
        addForm($collectionHolder, $newItemLinkLi);
    });


});






function addForm($collectionHolder, $newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.data('prototype');

    // get the new index
    var index = $collectionHolder.data('index');

    // Replace '$$name$$' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);

    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a address" link li
    var $newFormLi = $('<li></li>').append('<div class="col-md-12 col-sm-12 col-lg-12"><table class="table">'+newForm+'</table></div>');
//    $newFormLi.append(newForm);

    // also add a remove button, just for this example
    $newFormLi.append('<a href="#" class="remove glyphicon glyphicon-remove red"></a>');

    $newLinkLi.before($newFormLi);

    // handle the removal, just for this example
    $('.remove').click(function (e) {
        e.preventDefault();

        $(this).parent().remove();

        return false;
    });

//            $('.selectpicker').select2();
//    addFormDeleteLink($newFormLi);
}


function addFormDeleteLink($tagFormLi) {
    var $removeFormA = $('<a href="#" class="glyphicon glyphicon-trash red"></a>');
    $tagFormLi.append($removeFormA);

    $removeFormA.on('click', function (e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // remove the li for the tag form
        $tagFormLi.remove();
    });
}




