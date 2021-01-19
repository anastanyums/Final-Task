import statistics
import matplotlib.pyplot as plt

DataList =  [12, 15, 62, 92, 21, 51, 63, 73, 29]

print ("Data: ", DataList)
print ("Average: ", statistics.mean (DataList))


plt.plot(DataList)
plt.show()