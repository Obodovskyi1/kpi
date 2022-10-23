import argparse

parser = argparse.ArgumentParser()
parser.add_argument("-W", type=int)
parser.add_argument("-w", nargs='+', type=int)
parser.add_argument("-n", type=int)
args = parser.parse_args()


def knapSack(W, w, n):
    n = len(w)
    table = [[0 for x in range(W + 1)] for x in range(n + 1)]
    for i in range(n + 1):
        for j in range(W + 1):
            if i == 0 or j == 0:
                table[i][j] = 0
            elif w[i - 1] <= j:
                table[i][j] = max(w[i - 1] + table[i - 1][j - w[i - 1]], table[i - 1][j])
            else:
                table[i][j] = table[i - 1][j]

    return table[n][W]

knapSack(args.W, args.w, args.n)