def add_values(list1, list2, list3):
    return [(nums1[i] + nums2[i] + nums3[i]) for i in range(len(nums1))]


nums1 = [1, 2, 3]
nums2 = [4, 5, 6]
nums3 = [7, 8, 9]
print(add_values(nums1, nums2, nums3))
# Expected Result: [12, 15, 18]
