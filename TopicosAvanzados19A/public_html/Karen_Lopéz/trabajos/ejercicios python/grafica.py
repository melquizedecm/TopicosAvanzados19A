import matplotlib.pyplot as plt
import matplotlib.animation as animation 
import numpy as np
cajas = int(input ("Ingrese el numero de cajas: "))
COUNT = 100
fig, ax = plt.subplots()
line, = ax.plot([], [])
b=50*cajas
b=b/100
ax.set_ylim([.15, b])
ax.set_xlim(0, cajas)
xdata = []
ydata = []
def next():
    i = -1
    while i <= cajas:
        i += 1
        yield i

def update(i): 
    xdata.append(i)
    #y = np.sin(i / 10.)
    y=i/2
    ydata.append(y)
    line.set_data(xdata, ydata)
    return line,

if __name__ == "__main__":
    a = animation.FuncAnimation(fig, update, next, blit = False, interval = 60, repeat = False)
    plt.show()
