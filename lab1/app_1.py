import argparse

parser = argparse.ArgumentParser()
parser.add_argument("user_input", type=str)
args = parser.parse_args()

if args.user_input:
    try:
        print(eval(args.user_input))
    except SyntaxError:
        print("Input error (Syntax error)")
