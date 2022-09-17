## Instructions

These are the required commands to run the application

-   composer update
-   php artisan key:generate
-   php artisan migrate
-   php artisan db:seed
-   php artisan serve

## API documentation

---

```http
GET /api/products?category=vehicle&between=price,50000,10000
```

| Parameter                   | Type             | Description                                                                |
| :-------------------------- | :--------------- | :------------------------------------------------------------------------- |
| category                    | `string`         | **Optional**. Returns the vechile with the category                        |
| greater=price,{p}           | `number`         | **Optional**. Returns the product with the price greater than `p`          |
| greater_or_equal=price,{p}  | `number`         | **Optional**. Returns the product with the price greater or equal than `p` |
| less=price,{p}              | `number`         | **Optional**. Returns the product with the price less than `p`             |
| less_or_equal=price,{p}     | `number`         | **Optional**. Returns the product with the price less or equal than `p`    |
| between=price,{p1},{p2}     | `number, number` | **Optional**. Returns the product with the price in the range [p1, p2]     |
| not_between=price,{p1},{p1} | `number, number` | **Optional**. Returns the product with the price not in the range [p1, p2] |

## Responses

This endpoint will return the following format:

```javascript
{
  "products"    : array<Product>
}
```

The `products` attribute contains an array of filtered products

## API documentation

---

```http
POST /api/products?name=iPhone&category=vehicles&price=10000
```

| Parameter  | Type     | Description                               |
| :--------- | :------- | :---------------------------------------- |
| `name`     | `name`   | **Required**. The name of the product     |
| `category` | `string` | **Optional**. The category of the product |
| `price`    | `number` | **Optional**. The price of the product    |

## Responses

This endpoint will return the following format:

```javascript
{
    "status":     : bool,
    "message"     : string,
    "product"     : obeject(Product)
}
```

The `products` attribute contains an array of filtered products
