@extends('dashboard.main')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Card 1 -->
        <div class="card bg-base-200 shadow">
            <div class="card-body">
                <h2 class="card-title">Total Users</h2>
                <p class="text-3xl font-bold">1,234</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">View Details</button>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="card bg-base-200 shadow">
            <div class="card-body">
                <h2 class="card-title">Total Revenue</h2>
                <p class="text-3xl font-bold">$12,345</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">View Details</button>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="card bg-base-200 shadow">
            <div class="card-body">
                <h2 class="card-title">Total Orders</h2>
                <p class="text-3xl font-bold">567</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">View Details</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="mt-8">
        <div class="card bg-base-200 shadow">
            <div class="card-body">
                <h2 class="card-title">Recent Orders</h2>
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#12345</td>
                                <td>John Doe</td>
                                <td>2023-10-01</td>
                                <td>$100</td>
                                <td><span class="badge badge-success">Completed</span></td>
                            </tr>
                            <tr>
                                <td>#12346</td>
                                <td>Jane Smith</td>
                                <td>2023-10-02</td>
                                <td>$200</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                            </tr>
                            <!-- More rows -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart -->
    <div class="mt-8">
        <div class="card bg-base-200 shadow">
            <div class="card-body">
                <h2 class="card-title">Sales Overview</h2>
                <div id="chart"></div>
            </div>
        </div>
    </div>
@endsection
