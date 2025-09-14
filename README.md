# AimaneCouissi_StripePaymentMetadataStoreView

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
