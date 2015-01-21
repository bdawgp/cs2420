def compareSwap(arr, a, b):
    if arr[a] < arr[b]:
        tmp = arr[a]
        arr[a] = arr[b]
        arr[b] = tmp
        return True
    return False

def bubbleSort(arr):
    max = len(arr) - 1
    while max > 0:
        swapped = False
        for i in range(1, max+1):
            if compareSwap(arr, i, i-1):
                swapped = True
        if not swapped:
            break
        max -= 1
    return arr

def shakerSort(arr):
    min = 0
    max = len(arr) - 1
    for t in range(max+1):
        swapped = False
        if t%2 == 0:
            for i in range(min+1, max+1):
                if compareSwap(arr, i, i-1):
                    swapped = True
            max -= 1
        else:
            for i in range(max-1, min-1, -1):
                if compareSwap(arr, i+1, i):
                    swapped = True
            min += 1
        if not swapped:
            break
    return arr

def selectionSort(arr):
    for i in range(len(arr)):
        idx = i
        for c in range(i, len(arr)):
            if arr[c] < arr[idx]:
                idx = c
        if idx != i:
            tmp = arr[idx]
            arr[idx] = arr[i]
            arr[i] = tmp
    return arr
