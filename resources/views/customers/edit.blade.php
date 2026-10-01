<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>

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

                <div class="card-header bg-warning py-3">
                    <h3 class="mb-0">Edit Customer</h3>
                </div>

                <div class="card-body p-4">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Please fix the following errors:</strong>

                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form
                        action="{{ route('customers.update', $customer) }}"
                        method="POST"
                    >

                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Name <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control"
                                value="{{ old('name', $customer->name) }}"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email <span class="text-danger">*</span>
                            </label>

                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control"
                                value="{{ old('email', $customer->email) }}"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">
                                Phone
                            </label>

                            <input
                                type="text"
                                name="phone"
                                id="phone"
                                class="form-control"
                                value="{{ old('phone', $customer->phone) }}"
                            >
                        </div>

                        <div class="mb-4">
                            <label for="address" class="form-label">
                                Address
                            </label>

                            <textarea
                                name="address"
                                id="address"
                                rows="4"
                                class="form-control"
                            >{{ old('address', $customer->address) }}</textarea>
                        </div>

                        <div class="d-flex gap-2">

                            <button type="submit" class="btn btn-warning">
                                Update Customer
                            </button>

                            <a
                                href="{{ route('customers.index') }}"
                                class="btn btn-secondary"
                            >
                                Cancel
                            </a>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>