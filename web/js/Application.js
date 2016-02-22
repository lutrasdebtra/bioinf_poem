/*
 * Handles Exptype for addition and removal.  
 */

var $collectionHolder;

// setup an "add a tag" link
var $addRNASeqLink = $('<a href="#" class="add_rnaseq_link">Add an RNASeq Experiment</a>');
var $newLinkLi = $('<div></div>');

jQuery(document).ready(function() {
    //Get previous value.
    var currVal = $('#expType_drop').val();
    $('#expType_drop').data("value", currVal);

    $('#expType_drop').on('change', function(e) {
        // If there is already an experiment, check before deletion.
        if ($('.exptype-form-div')[0]) {
            var r = confirm("Are you sure you want to delete the current experiment?");
        } else {
            var r = true;
        }
        if (r == true) {
            // prevent the link from creating a "#" on the URL
            e.preventDefault();

            var optionSelect = $('option:selected', this).text();
            // Remove old ExpType if exists.
            if ($('.exptype-form-div')[0]) {
                $('.exptype-form-div').remove();
            }
            // Find correct type and run appropriate form.
            if (optionSelect == 'RNASeq') {
                // Get the div that holds the collection of rnaseqs
                $collectionHolder = $('div.rnaseqs');
                // add the "add an RNASeq Experiment" anchor and div to the rnaseqs div
                $collectionHolder.append($newLinkLi);
                // count the current form inputs we have (e.g. 2), use that as the new
                // index when inserting a new item (e.g. 2)
                $collectionHolder.data('index', $collectionHolder.find(':input').length);
                addForm($collectionHolder, $newLinkLi, "RNA Seq Experiment");
            } else if (optionSelect == 'DNASeq') {
                $collectionHolder = $('div.dnaseqs');
                $collectionHolder.append($newLinkLi);
                $collectionHolder.data('index', $collectionHolder.find(':input').length);
                addForm($collectionHolder, $newLinkLi, "DNA Seq Experiment");
            } else if (optionSelect == 'Metabolomics') {
                $collectionHolder = $('div.metabolomics');
                $collectionHolder.append($newLinkLi);
                $collectionHolder.data('index', $collectionHolder.find(':input').length);
                addForm($collectionHolder, $newLinkLi, "Metabolomics Experiment");
            }
        } else {
            $(this).val($.data(this, "value"));
            return false;
        }

     $.data(this, "value", $(this).val());
    });
});

function addForm($collectionHolder, $newLinkLi, $formType) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.data('prototype');

    // get the new index
    var index = $collectionHolder.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);

    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a tag" link li
    var $newFormLi = $('<div class="exptype-form-div"><h3>' + $formType + '</h3></div>').append(newForm);
    $newLinkLi.before($newFormLi);
}

/*
 * Handles Experiment Sample Numbers.
 */

// keep track of how many sampleNum fields have been rendered
var sampleNumCount = 0;

jQuery(document).ready(function() {  

    // Adds a default Sample Number.
    var sampleNumList = jQuery('#sampleNums-fields-list');
    var newWidget = sampleNumList.attr('data-prototype');
    newWidget = newWidget.replace(/__name__/g, sampleNumCount);
    sampleNumCount++;
    var newDiv= jQuery('<div class="sampleNumExpDiv"></div>').html(newWidget);
    // Avoids adding in edit form (e.g. if there are already sample Numbers).
    if (!($('[id*="experiment_sampleNums_"]').length)) {
        sampleNumCount++;
        newDiv.appendTo(sampleNumList);
    }

    jQuery('#add-another-sampleNum').click(function(e) {
        e.preventDefault();

        sampleNumList = jQuery('#sampleNums-fields-list');

        // grab the prototype template
        newWidget = sampleNumList.attr('data-prototype');
        // replace the "__name__" used in the id and name of the prototype
        // with a number that's unique to your emails
        // end name attribute looks like name="contact[emails][2]"
        newWidget = newWidget.replace(/__name__/g, sampleNumCount);
        sampleNumCount++;

        // create a new list element and add it to the list
        newDiv= jQuery('<div class="sampleNumExpDiv"></div>').html(newWidget);
        newDiv.appendTo(sampleNumList);
    });
})
