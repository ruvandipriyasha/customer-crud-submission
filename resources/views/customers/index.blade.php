<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Management</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold mb-1">Customer Management</h1>
            <p class="text-muted mb-0">Manage your customer records</p>
        </div>

        <a href="{{ route('customers.create') }}" class="btn btn-primary">
            + Add Customer
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
            ></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body">

            @if($customers->count() > 0)

                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">

                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date of Birth</th>
                                <th>Address</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id }}</td>

                                    <td class="fw-semibold">
                                        {{ $customer->name }}
                                    </td>

                                    <td>
                                        {{ $customer->email }}
                                    </td>

                                    <td>
                                        {{ $customer->phone ?? 'N/A' }}
                                    </td>

                                    <td>
                                        {{ $customer->date_of_birth ? \Carbon\Carbon::parse($customer->date_of_birth)->format('d M Y') : 'N/A' }}
                                    </td>

                                    <td>
                                        {{ $customer->address ?? 'N/A' }}
                                    </td>

                                    <td class="text-center">

                                        <a
                                            href="{{ route('customers.show', $customer) }}"
                                            class="btn btn-sm btn-info text-white"
                                        >
                                            View
                                        </a>

                                        <a
                                            href="{{ route('customers.edit', $customer) }}"
                                            class="btn btn-sm btn-warning"
                                        >
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('customers.destroy', $customer) }}"
                                            method="POST"
                                            class="d-inline"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this customer?')"
                                            >
                                                Delete
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            @else

                <div class="text-center py-5">
                    <h4 class="text-muted">No customers found</h4>
                    <p class="text-muted">
                        Add your first customer to get started.
                    </p>

                    <a
                        href="{{ route('customers.create') }}"
                        class="btn btn-primary"
                    >
                        Add Customer
                    </a>
                </div>

            @endif

        </div>
    </div>

</div>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>