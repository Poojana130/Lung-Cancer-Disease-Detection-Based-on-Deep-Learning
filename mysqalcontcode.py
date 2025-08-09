import mysql.connector

# Database and update details
database = "lung_disease"
table = "tbl_result"
id_value = 1          # Specify the ID of the record you want to update
new_result = "Positive"  # Specify the new value for the `result` column

try:
    # Connect to the MySQL database
    connection = mysql.connector.connect(
        host="localhost",      # Default host for XAMPP
        user="root",           # Default user for XAMPP (update if you use a different username)
        password="",           # Default password for XAMPP (set if applicable)
        database=database      # Database name
    )

    if connection.is_connected():
        cursor = connection.cursor()

        # Update query
        update_query = f"UPDATE {table} SET result = %s WHERE id = %s"
        
        # Execute the query
        cursor.execute(update_query, (new_result, id_value))
        
        # Commit changes to the database
        connection.commit()
        print(f"Record with ID {id_value} updated successfully.")

except mysql.connector.Error as e:
    print(f"Error: {e}")

finally:
    # Close the connection
    if connection.is_connected():
        cursor.close()
        connection.close()
        print("MySQL connection closed.")
