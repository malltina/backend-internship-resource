import datetime

def timestamp_to_date(timestamp):
    timestamp = datetime.datetime.fromtimestamp(1630839136)
    return timestamp.strftime('%Y-%m-%d %H:%M:%S')


print(timestamp_to_date('1630839136'))
# Expected Result: 2021-09-05 15:22:16 
