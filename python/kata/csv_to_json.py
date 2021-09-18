import csv
import json
def csv_to_json(csv_filename):
    """ Write a code to read csv file content and store as json us-states.json, 
    finally return csv file content as list """
    data = {}
    output = []
    with open(csv_filename) as cs:
        x = csv.DictReader(cs)
        s = csv.reader(cs)
        for  i in x:
            data.update(i)
            output.append(data)
        with open('us-states.json', 'w') as f:
            json.dump(output,f)

print(csv_to_json('/Users/nematirani/Desktop/backend-internship-resource/python/kata/resource/usa-states.csv'))
# Expected Result: [{"StateCode": "AK", "StateName": "Alaska", "IsRealState": True, "StateDate": "1819-12-14"}, ...]

