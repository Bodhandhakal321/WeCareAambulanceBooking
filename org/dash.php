<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ambulance Booking System - Admin Dashboard</title>
  <link rel="stylesheet" href="./css/dash2.css">
</head>

<body>
  <header>
    <h1>Ambulance Booking System - Admin Dashboard</h1>
  </header>

  <nav>
    <ul>
      <li><a href="#" class="active">Dashboard</a></li>
      <li><a href="#">Bookings</a></li>
      <li><a href="add.php">Add Ambulances</a></li>
      <li><a href="#">Users</a></li>
      <li><a href="#">Reports</a></li>
      <li><a href="#">Settings</a></li>
    </ul>
  </nav>

  <main>
    <section class="overview">
      <div class="summary-box">
        <div class="box-item">
          <h2>Total Bookings</h2>
          <p>125</p>
        </div>
        <div class="box-item">
          <h2>Ambulances Available</h2>
          <p>18</p>
        </div>
        <div class="box-item">
          <h2>Total Users</h2>
          <p>75</p>
        </div>
      </div>

      <div class="content">
        <h2>Recent Bookings</h2>
        <table class="data-table">
          <thead>
            <tr>
              <th>Booking ID</th>
              <th>User</th>
              <th>Pickup Location</th>
              <th>Dropoff Location</th>
              <th>Date and Time</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>B001</td>
              <td>John Doe</td>
              <td>Location X</td>
              <td>Location Y</td>
              <td>2023-06-25 10:00 AM</td>
              <td>Completed</td>
              <td><button>Edit</button><button>Cancel</button></td>
            </tr>
            <tr>
              <td>B002</td>
              <td>Jane Smith</td>
              <td>Location Z</td>
              <td>Location W</td>
              <td>2023-06-26 02:30 PM</td>
              <td>Completed</td>
              <td><button>Edit</button><button>Cancel</button></td>
            </tr>
            <!-- Additional rows -->
          </tbody>
        </table>
      </div>
    </section>

    <section class="availability-tracking">
      <h2>Availability Tracking</h2>
      <table class="data-table">
        <thead>
          <tr>
            <th>Ambulance ID</th>
            <th>Status</th>
            <th>Last Known Location</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>A001</td>
            <td>Available</td>
            <td>Location A</td>
          </tr>
          <tr>
            <td>A002</td>
            <td>Occupied</td>
            <td>Location B</td>
          </tr>
          <!-- Additional rows -->
        </tbody>
      </table>
    </section>

    <section class="reports-analytics">
      <h2>Reports and Analytics</h2>
      <div class="chart-container">
        <!-- Include charts or graphs here -->
      </div>
    </section>

    <section class="user-management">
      <h2>User Management</h2>
      <table class="data-table">
        <thead>
          <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>U001</td>
            <td>John Doe</td>
            <td>john@example.com</td>
            <td>Admin</td>
          </tr>
          <tr>
            <td>U002</td>
            <td>Jane Smith</td>
            <td>jane@example.com</td>
            <td>Operator</td>
          </tr>
          <!-- Additional rows -->
        </tbody>
      </table>
    </section>

    <section class="settings">
      <h2>Settings</h2>
      <form class="settings-form">
        <label for="company-name">Company Name:</label>
        <input type="text" id="company-name" name="company-name" placeholder="Enter company name">

        <label for="contact-email">Contact Email:</label>
        <input type="text" id="contact-email" name="contact-email" placeholder="Enter contact email">

        <label for="timezone">Timezone:</label>
        <select id="timezone" name="timezone">
          <option value="1">GMT +01:00</option>
          <option value="2">GMT +02:00</option>
          <!-- Additional options -->
        </select>

        <button type="submit">Save Settings</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Ambulance Booking System. All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>
