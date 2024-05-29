// Contoh data profil dan order history (ganti dengan data asli dari database)
const customerData = {
    name: "John Doe",
    email: "johndoe@example.com",
    phone: "+628123456789",
    orders: [
        {
            id: 1,
            date: "2024-05-24",
            total: 50000,
            products: [
                { name: "Nasi Goreng", price: 20000, quantity: 2 },
                { name: "Es Teh", price: 5000, quantity: 1 },
            ]
        },
        {
            id: 2,
            date: "2024-05-25",
            total: 100000,
            products: [
                { name: "Ayam Geprek", price: 30000, quantity: 1 },
                { name: "Es Jeruk", price: 10000, quantity: 2 },
            ]
        }
    ]
};

// Menampilkan data profil
document.getElementById('customerName').textContent = customerData.name;
document.getElementById('customerEmail').textContent = customerData.email;
document.getElementById('customerPhone').textContent = customerData.phone;

// Menampilkan daftar order history
const orderList = document.getElementById('orderList');
customerData.orders.forEach(order => {
    const orderItem = document.createElement('li');
    orderItem.textContent = `Pesanan #${order.id} (${order.date})`;
    orderItem.addEventListener('click', () => showOrderDetail(order));
    orderList.appendChild(orderItem);
});

// Menampilkan detail order (function ini perlu diimplementasikan)
function showOrderDetail(order) {
    // Tampilkan detail order di sini (misalnya, dalam modal atau halaman baru)
    console.log("Detail Order:", order);
}
