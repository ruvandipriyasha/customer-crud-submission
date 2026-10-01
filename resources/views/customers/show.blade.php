<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-info text-white py-3">
                    <h3 class="mb-0">Customer Details</h3>
                </div>

                <div class="card-body p-4">

                    <div class="mb-4">
                        <label class="text-muted small">Customer ID</label>
                        <h5>{{ $customer->id }}</h5>
                    </div>

                    <div class="mb-4">
                        <label class="text-muted small">Name</label>
                        <h5>{{ $customer->name }}</h5>
                    </div>

                    <div class="mb-4">
                        <label class="text-muted small">Email</label>
                        <h5>{{ $customer->email }}</h5>
                    </div>

                    <div class="mb-4">
                        <label class="text-muted small">Phone</label>
                        <h5>{{ $customer->phone ?? 'N/A' }}</h5>
                    </div>

                    <div class="mb-4">
                        <label class="text-muted small">Address</label>
                        <h5>{{ $customer->address ?? 'N/A' }}</h5>
                    </div>

                    <div class="mb-4">
                        <label class="text-muted small">Created At</label>
                        <h5>{{ $customer->created_at->format('d M Y, h:i A') }}</h5>
                    </div>

                    <div class="d-flex gap-2">

                        <a
                            href="{{ route('customers.edit', $customer) }}"
                            class="btn btn-warning"
                        >
                            Edit Customer
                        </a>

                        <a
                            href="{{ route('customers.index') }}"
                            class="btn btn-secondary"
                        >
                            Back to Customers
                        </a>

                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>