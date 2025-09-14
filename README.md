# AimaneCouissi_StripePaymentMetadataStoreView

[![Latest Stable Version](http://poser.pugx.org/aimanecouissi/module-stripe-payment-metadata-store-view/v)](https://packagist.org/packages/aimanecouissi/module-stripe-payment-metadata-store-view) [![Total Downloads](http://poser.pugx.org/aimanecouissi/module-stripe-payment-metadata-store-view/downloads)](https://packagist.org/packages/aimanecouissi/module-stripe-payment-metadata-store-view) [![Latest Unstable Version](http://poser.pugx.org/aimanecouissi/module-stripe-payment-metadata-store-view/v/unstable)](https://packagist.org/packages/aimanecouissi/module-stripe-payment-metadata-store-view) [![License](http://poser.pugx.org/aimanecouissi/module-stripe-payment-metadata-store-view/license)](https://packagist.org/packages/aimanecouissi/module-stripe-payment-metadata-store-view) [![PHP Version Require](http://poser.pugx.org/aimanecouissi/module-stripe-payment-metadata-store-view/require/php)](https://packagist.org/packages/aimanecouissi/module-stripe-payment-metadata-store-view)

During checkout, when the Stripe PaymentIntent is created or updated, the module adds a `Store View` entry to the PaymentIntent metadata.

## Installation
```bash
composer require aimanecouissi/module-stripe-payment-metadata-store-view
bin/magento module:enable AimaneCouissi_StripePaymentMetadataStoreView
bin/magento setup:upgrade
bin/magento cache:flush
```

## Usage
Place an order from a chosen Store View, open the transaction in the Stripe Dashboard, and check **Metadata** for `Store View` matching your Store View name.

## Uninstall
```bash
bin/magento module:disable AimaneCouissi_StripePaymentMetadataStoreView
composer remove aimanecouissi/module-stripe-payment-metadata-store-view
bin/magento setup:upgrade
bin/magento cache:flush
```

## License
[MIT](LICENSE)
