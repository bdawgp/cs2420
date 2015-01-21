import random
import sort

def generateList(n):
    a = []
    for i in range(n):
        a.append(int(random.random() * n))
    return a

def test_bubble():
    arr = generateList(20)
    acp = sort.bubbleSort(arr[:])
    arr.sort()
    assert acp == arr

def test_shaker():
    arr = generateList(20)
    acp = sort.shakerSort(arr[:])
    arr.sort()
    assert acp == arr

def test_selection():
    arr = generateList(20)
    acp = sort.selectionSort(arr[:])
    arr.sort()
    assert acp == arr
