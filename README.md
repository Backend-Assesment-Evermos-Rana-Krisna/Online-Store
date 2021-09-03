# Online Store

#### What you think happened that caused those bad reviews during our 12.12 event ?
- Customers are disappointed because they have waited several days for their order and their order was canceled due to unavailability of stock
- Sent product did not match what the customer ordered because there were too many orders so the offline store sent the wrong product
- Delivery time becomes longer because packages accumulate in warehouses to be sent either in offline stores and/or in shipping expeditions
- The quality of customer service is reduced because many customers have to be contacted
- Apps and servers are not supported due to heavy traffic

As we know when running an offline store and an online store at the same time, we must always synchronize data

In my opinion, the main problem is the synchronize between offline stores and online stores is not optimal, especially in product management.

#### Solution:
- Customer satisfaction is number 1
- Make sure to always synchronize data between offline stores and online stores, especially products that will be sell in events
- Make sure to monitor apps and servers
- Contact customers if there are products that will be out of stock, especially products that are in the customer's cart
- if needed, hire new employees to help offline stores and online stores


#### Scenario

##### Order Scenario
1. Customer must login first
1. Customer search product and sent it to cart, then customer pays for the order
1. Store will verify whether the payment has been made or not, if so, the store will prepare the customer's order
1. if the order has been prepared, the store will notify the customer that the order has been prepared and will be sent immediately
1. Store sends the order
1. Customer accepts the order and reviews the order
1. Store receives the results of reviews from customers

##### Synchronize Store
in this case back to the store, but there are some suggestions that might be used, as follows:

1. sync data before, during and after the event
1. sync data after order delivery process
1. sync data after checkout process
1. sync data after payment verification process
1. sync data periodically (daily, weekly, monthly)