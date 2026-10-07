# WMS Roastery: Multi-Branch Warehouse Management System ☕📦

An enterprise-grade Warehouse Management System (WMS) specifically tailored for the Specialty Coffee Industry, featuring production tracking, inter-branch logistics, and B2B/B2C order fulfillment.

## 🤖 AI Collaboration Disclaimer:
The business scenario, database architecture planning, and conceptual brainstorming for this project were developed with the analytical assistance of Google Gemini AI. However, all codebase implementation, programming logic, and system integration were solely written and executed by me.

## 📖 Project Overview

Unlike standard CRUD inventory apps, this WMS is designed around a Hub-and-Spoke architecture (One Main Roastery Hub supplying multiple Retail Spokes). It tracks the physical transformation of raw materials (Green Beans) into finished goods (Roasted Beans) while managing complex logistics, including IN_TRANSIT states and Master-Detail order structures.

## ✨ Key Features & Technical Highlights

Production & Manufacturing Log:
Tracks the coffee roasting process, automatically calculating the weight loss percentage when raw green beans are transformed into roasted batches.

Hub & Spoke Inventory Routing (Inter-branch Transfers):
Handles stock mutations between the Main Warehouse and Branch Stores using strict IN_TRANSIT states to prevent data loss during physical delivery.

Master-Detail Order Fulfillment:
Separates Order Headers (Customer info, Delivery status) from Order Items (Product details), supporting single-invoice multiple-item processing for both B2B and B2C channels.

## Enterprise Data Integrity:

Soft Deletes: Data is never permanently erased (deleted_at timestamps) to preserve historical sales data.

Blameable Traits: Tracks user accountability (created_by, updated_by, deleted_by) for every major transaction.

Centralized Audit Trail: Logs old_values and new_values in JSON format to track who changed what and when.

Automated Document Generation:
Dynamically generates printable PDF Delivery Orders (Surat Jalan) for internal couriers and B2B clients.

## 🗄️ Database Architecture (Entity Recap)

The system relies on a highly normalized relational database, separating Master Data from Transactional Logs.

1. **Master Data**

    - **products**: The master catalog (SKU, Name, Type, Base Price, Min Stock Alert).

    - **locations**: Physical storage points identified as either Hub (Main) or Spoke (Branch).

2. **Inventory & Production**

    - **roasting_batches**: Records the manufacturing process (Green Bean input → Roasted Bean output).

    - **inventory_levels**: A read-only pivot table representing the actual stock of a specific product at a specific location.

3. Fulfillment & Logistics (Master-Detail)

    - **orders & order_items**: Manages external outbounds (B2B Wholesale & B2C E-commerce).

    - **transfers & transfer_items**: Manages internal outbounds (Moving stock from Hub to Spoke).

    - **returns**: Logs defective or returned items linked to specific historical Order IDs.

## 🛠️ Tech Stack

- **Backend Framework**: CodeIgniter 4 (PHP)

- **Database**: XAMPP MySQL (Utilizing Relational Constraints, Foreign Keys, and Stored Procedures)

- **Frontend UI**: Bootstrap 5 (via SB Admin 2 template)

- **Interactivity**: Vanilla JavaScript / jQuery (for dynamic Master-Detail form rows and AJAX dropdowns)

## 🔒 Security Measures Implemented

- **Environment Variables**: Sensitive data (Database credentials, API Keys) are strictly isolated in a .env file and excluded from version control via .gitignore.

- **CSRF Protection**: Cross-Site Request Forgery protection is enabled globally for all form submissions.

- **Mass Assignment Protection**: CI4 Models are configured with $allowedFields to prevent HTTP parameter pollution.

## 🚀 Installation & Setup

*(Instructions to be added once development begins)*