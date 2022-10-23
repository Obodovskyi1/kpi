import operator
import argparse

parser = argparse.ArgumentParser()
parser.add_argument("Operator", type=str)
parser.add_argument("Number1", type=str)
parser.add_argument("Number2", type=str)
args = parser.parse_args()

ds = {'add': operator.add, 'sub': operator.sub, 'div': operator.truediv, "mul": operator.mul}
first_num = int(args.Number1)
operation = str(args.Operator)
second_num = int(args.Number1)
print(ds[operation](first_num, second_num))

