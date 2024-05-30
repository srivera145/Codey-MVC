var stripe = Stripe('pk_test_51N44CEEo9JK0lLFs2VsQoMmlu7A0fFMTjpbKjDNiXeIU4wzsDHObZhsxmTvnanZYZablX9PMIpqGYIvxEuPZpkx700GUJ2qGtF');
        var session = "<?php echo $checkout_session['id']; ?>";
        stripe.redirectToCheckout({
                sessionId: session
            })
            .then(function(result) {
                // If `redirectToCheckout` fails due to a browser or network
                // error, you should display the localized error message to your
                // customer using `error.message`.
                if (result.error) {
                    alert(result.error.message);
                }
            })
            .catch(function(error) {
                console.error('Error:', error);
            });