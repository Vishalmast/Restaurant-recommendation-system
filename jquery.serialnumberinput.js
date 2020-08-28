/*
  HTML Input Type SerialNumber - v1.0.3
  License:  GNU GENERAL PUBLIC LICENSE Version 3
  GitHub: https://github.com/ish-101/HTML-Input-Type-SerialNumber
  Dependency: jQuery 3.x.x

  Made by Ishpreet Singh Bhasin
  Website: http://ishpreet.tech/
  GitHub: https://github.com/ish-101
*/

(function($)
{
	$.fn.serialnumberinput = function(user_options)
	{
		var target = this;
		var options = $.extend(
		{
			"separator": "",
			"pieces":
			[
			],
		}, user_options, this.data());
		var digits = [];
		var counter = -1;
		$.each(options.pieces, function(i)
		{
			if (this.type === "separator")
			{
				if (this.separator === undefined)
				{
					this.separator = options.separator;
				}
				this.length = 1;
			}
			else
			{
				this.type = "character";
				if (this.length === undefined)
				{
					this.length = 1;
				}
			}
			this.length = Number(this.length);
			this.length = Math.max(this.length, 0);

			for (var j = 0; j < this.length; j++)
			{
				digits[counter + j + 1] = i;
			}
			counter += this.length;
		});
		target.attr(
		{
			'minlength': digits.length,
			'maxlength': digits.length,
		});
		target.on('keyup', function(e)
		{
			var x = target.val().split("");
			for (var i = 0; i < x.length; i++)
			{
				var reg_exp_pattern;
				if (options.pieces[digits[i]].type !== "separator")
				{
					reg_exp_pattern = RegExp(options.pieces[digits[i]].pattern);
				}
				else
				{
					reg_exp_pattern = RegExp("[\\" + options.pieces[digits[i]].separator + "]");
				}
				if (! (reg_exp_pattern.test(x[i])) )
				{
					break;
				}
			}
			if ((i < digits.length) && (options.pieces[digits[i]].type === "separator"))
			{
				x[i] = options.pieces[digits[i]].separator;
				i++;
			}
			target.val(x.join("").substring(0, i));
		});
		return;
	};
}(jQuery));