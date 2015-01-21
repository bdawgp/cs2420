import math
import random
import sort

def generateList(n):
    a = []
    for i in range(n):
        a.append(math.floor(random.random() * n))
    return a

def test_bubble():
    arr = generateList(20)
    assert cmp(sort.bubbleSort(arr[:]), arr.sort())

def test_shaker():
    arr = generateList(20)
    assert cmp(sort.shakerSort(arr[:]), arr.sort())

def test_selection():
    arr = generateList(20)
    assert cmp(sort.selectionSort(arr[:]), arr.sort())
