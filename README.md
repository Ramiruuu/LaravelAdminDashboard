# LaravelAdminDashboard
Is an admin panel built with Laravel and Lumen. It uses SQLYOG as its database, managed through XAMPP. The dashboard provides user and transaction management with data visualization and CRUD operations.

## 🚀 Features
- User authentication (Login, Register, Forgot Password)
- Role-based access control
- Dashboard with charts and statistics
- CRUD operations for managing users and content
- Responsive UI with Tailwind CSS
- API integration support

## 📌 Installation

### 1️⃣ Clone the Repository
```sh
git clone https://github.com/Ramiruuu/LaravelAdminDashboard.git
cd LaravelAdminDashboard
```

### 2️⃣ Install Dependencies
```sh
composer install
npm install
```

### 3️⃣ Configure Environment
Copy the example environment file and set up your database credentials:
```sh
cp .env.example .env
php artisan key:generate
```

### 4️⃣ Set Up Database
```sh
php artisan migrate --seed
```

### 5️⃣ Serve the Application
```sh
php artisan serve
```

## 🛠️ Available Commands
| Command | Description |
|---------|-------------|
| `php artisan migrate` | Run database migrations |
| `php artisan db:seed` | Seed database with test data |
| `php artisan route:list` | Show available routes |
| `npm run dev` | Compile assets |
| `php artisan serve` | Start local development server |

## 📷 Screenshots

#### Register
![image](https://github.com/user-attachments/assets/bd3c08a9-2476-46ff-8d9d-ae388f6d9a95)

#### Login 
![image](https://github.com/user-attachments/assets/3627b88f-1adf-4a12-88ac-0aa1944323f4)


## 📜 License
This project is open-source and available under the [MIT License](LICENSE).

## 💡 Contributing
Feel free to submit issues and pull requests to improve this project!

## 📞 Contact
For inquiries or support, reach out via:
- **GitHub Issues**: [Create an issue](https://github.com/Ramiruuu/LaravelAdminDashboard/issues)
- **Email**: oclaritremar01@gmail.com

