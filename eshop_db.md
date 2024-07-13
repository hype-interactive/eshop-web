E-SHOP DB DESIGN


Users
-Id
-fname
-mame
-lmane 
-Phone
-Email
-Image_url
-Password
-Role_id

-Roles
 -name
 -description
  -status

Permissions
  -name
  -description
  -role_id


Customers
-fname
 -mame
-lmane 
-Phone
-Email
-Password
-image_url


Product Categories
-Name
-Description
-image_url

Products
-Name
-Description
-Unit [kg,l….]
-Vendor_Price
-Final_price
-Product category_id
-Expire_date
-image_url
-Status [in_stock, out_of_stock]
-Visibility 
-Featured


Inventory
-Quantity
-Product_id

Inventory logs
-inventory _id
-Quantity
-Change_type [addition, removal, sale]
-Reason



Cart
-Customer_id
-Product_id
-quantity

Order
-Customer_id
-Total
-order_id
-Date
-Callback
-Payment_method
-Payment_status
-Status

OrderProducts
-Oder_id
-Product_id

Payments
-Method
-Amount
-Status
-Date
-Narration
-Order_id

Subscription_Plans
-Name
-Description
-Price
-duration

Subscription
-User_id
-Start_date
-End_date
-Status
-Plan_id

Billboards
-Name
-Description
-Image_url
-Visibility 
