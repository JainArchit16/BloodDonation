import sys
import mysql.connector



def displayDonor(id):
    mydb = mysql.connector.connect(host="localhost", user="admin", passwd="admin",
                                   auth_plugin='mysql_native_password')
    mycursor = mydb.cursor()
    mycursor.execute("use bloodbank")

    mycursor.execute("SELECT * FROM donor WHERE donor_id = '" + id + "';")
    a = mycursor.fetchall()
    mydb.commit()

    for row in a:
        print(row)
    mycursor.close()


def addDonor(donor_id, first_name, last_name, date_of_birth, gender, contact_number, email, city,blood_type):
    mydb = mysql.connector.connect(host="localhost", user="admin", passwd="admin",
                                   auth_plugin='mysql_native_password')
    mycursor = mydb.cursor()
    mycursor.execute("use bloodbank")

    mycursor.execute(f"INSERT INTO donor (donor_id, first_name, last_name, date_of_birth, gender, contact_number, email, city, blood_type) VALUES ('{donor_id}', '{first_name}', '{last_name}', '{date_of_birth}', '{gender}', '{contact_number}', '{email}', '{city}', '{blood_type}')" )
    a = mycursor.fetchone()
    mydb.commit()

    print(a)
    mycursor.close()

def findDonorForRecipient( city , blood_type):
    mydb = mysql.connector.connect(host="localhost", user="admin", passwd="admin",
                                   auth_plugin='mysql_native_password')
    mycursor = mydb.cursor()
    mycursor.execute("use bloodbank")
    print(blood_type)

    mycursor.execute(f" SELECT * FROM donor WHERE blood_type = '{blood_type}' ORDER BY CASE WHEN city = '{city}' THEN 0 ELSE 1 END, city;" )
    a = mycursor.fetchall()
    mydb.commit()

    print(a)
    mycursor.close()
















 
print("haiss")
#displayDonor("A+")
#addDonor("12","name","lastname","20-1-2005","male" , "696969969696","test@gamil.com","Delhi","A+")

function_name = sys.argv[1]
args = [arg for arg in sys.argv[2:]]

# Call the specified function with the provided arguments and print its result
if function_name == "displayDonor":
    displayDonor(args[0])
    sys.exit(1)
    #result = function_one(args[0], args[1])
elif function_name == "addDonor":
    
    addDonor(args[0],args[1],args[2],args[3],args[4],args[5],args[6],args[7],args[8])
    #print("Usage: python myscript.py function_two [arg1] [arg2] [arg3]")
    sys.exit(1)
#result = function_two(args[0], args[1], args[2])

elif function_name == "findDonorForRecipient":
    findDonorForRecipient(args[0],args[1])
    #print("Usage: python myscript.py function_two [arg1] [arg2] [arg3]")
    sys.exit(1)
    
elif function_name == "hai":
    hai()
else:
    print("Invalid function name")
    sys.exit(1)

#print(result)