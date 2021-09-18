import csv
import json


def csv_to_json(csv_path, json_path):
    jason = []
    with open(csv_path, encoding='utf-8') as csv_file:
        # csv.DictReader make a dict type of our csv file elements
        csv_reader = csv.DictReader(csv_file)

        for row in csv_reader:
            jason.append(row)
    with open(json_path, 'w', encoding='utf-8') as json_file:
        # json.dumps() function converts a Python object into a json string
        json_string = json.dumps(jason, indent=4)
        json_file.write(json_string)

    return json_string


csv_file_path = input()
json_file_path = input()

print(csv_to_json(csv_file_path, json_file_path))
# Expected Result: [{"StateCode": "AK", "StateName": "Alaska", "IsRealState": True, "StateDate": "1819-12-14"}, ...]
