window.AddressValidator = require('address-validator');

function validateAddress(address, callback) {
    var AddressValidator = window.AddressValidator;
    var validator = new AddressValidator();
    
    var addressData = {
        street: address.street,
        city: address.city,
        state: address.state,
        postalCode: address.postalCode,
        country: 'US'
    };
    
    validator.validate(addressData, function(err, exact, inexact) {
        if (err) {
            console.log(err);
            return;
        }
        
        if (exact) {
            callback(exact);
        } else if (inexact) {
            // Supplement the address with missing details
            validator.suggest(addressData, function(err, suggestions) {
                if (err) {
                    console.log(err);
                    return;
                }
                
                if (suggestions.length > 0) {
                    // Use the first suggestion
                    var suggestion = suggestions[0];
                    
                    // Update the address with the missing details
                    address.street = suggestion.street;
                    address.city = suggestion.city;
                    address.state = suggestion.state;
                    address.postalCode = suggestion.postalCode;
                    
                    callback(address);
                }
            });
        }
    });
}
