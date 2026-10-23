# StyleNest — Clothing Store

StyleNest is a lightweight custom WordPress theme for a local WooCommerce clothing store. Product, cart, checkout, account, inventory, and order data remain managed by WordPress/WooCommerce.

## Install with LocalWP

1. Install LocalWP and create a site named `stylenest`.
2. Open the site folder and copy this folder into `app/public/wp-content/themes/stylenest/`.
3. Start the site, open WordPress Admin, and activate **StyleNest** under Appearance → Themes.
4. Install and activate WooCommerce. Run its setup wizard with Bangladesh as the store location and BDT as currency.
5. Under Settings → Permalinks choose **Post name**, then save.
6. Create Shop, Cart, Checkout, and My Account pages (WooCommerce can create them automatically), plus editable pages named About Us, Contact Us, Privacy Policy, and Shipping & Returns.
7. Create menus under Appearance → Menus and assign the primary/footer locations.
8. Import `demo-products.csv` from Products → Import. Add product images manually, because the CSV intentionally uses no remote image URLs.
9. Enable Cash on Delivery under WooCommerce → Settings → Payments. Use fictitious data for local tests.

## XAMPP alternative

Start Apache and MySQL in XAMPP, create `stylenest_db` in phpMyAdmin, download WordPress into `C:\xampp\htdocs\stylenest`, and visit `http://localhost/stylenest`. Use database `stylenest_db`, user `root`, and a blank password unless you changed XAMPP defaults. Complete WordPress setup, then copy the theme to `wp-content/themes/stylenest`, install WooCommerce, and follow the LocalWP steps above.

## Store configuration

Set currency and location in WooCommerce → Settings → General. Configure flat-rate shipping in Shipping → Shipping zones. Configure stock in Products → Inventory. Prices in the CSV are demonstration values, not market or tax advice. Taxes and policies should be set according to the owner's requirements.

## Optional variations

For size/color products, create a variable product, add global attributes (Size: S, M, L, XL, XXL; Color: Black, Beige, White), then create variations and per-variation stock. WooCommerce handles selection, cart data, and stock reduction.

## Test checklist

- Activate theme; check responsive menu and homepage links.
- Import products; add images, categories, stock, and optional attributes.
- Browse shop, sort/filter, open a product, add to cart, change quantity, remove item.
- Complete a Cash on Delivery order with fictitious customer information.
- Confirm order, stock reduction, cart clearing, and order visibility in WooCommerce → Orders.
- Test My Account login/registration, empty cart, invalid checkout fields, and out-of-stock products.
- Test mobile width and browser console/PHP logs for errors.

## Troubleshooting

- Blank or broken layout: confirm the theme folder is exactly `wp-content/themes/stylenest/`, then resave permalinks.
- Shop shortcode empty: ensure products are published and catalog visibility is set to visible.
- Category links return errors: create the matching product categories, then resave permalinks.
- Checkout unavailable: confirm WooCommerce pages are assigned in WooCommerce → Settings → Advanced.
- CSV import errors: save the file as UTF-8 CSV and use WooCommerce's built-in importer.
- No payment is processed: this demo intentionally uses Cash on Delivery only.
